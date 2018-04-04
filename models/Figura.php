<?php

namespace app\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "figura".
 *
 * @property int $id
 * @property int $numLados
 * @property string $discr
 * @property int $lado
 * @property int $base
 * @property int $altura
 * @property int $hipotenusa
 * @property double $radio
 * @property int $workspace
 */
class Figura extends \yii\db\ActiveRecord
{

    public $print = '';

    public function afterFind()
    {
        parent::afterFind();
        $this->print = $this->printr();

        return $this;
    }

    /**
     * @inheritdoc
     */
    public static function tableName(){
        return 'figura';
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [['numLados', 'discr'], 'required'],
            [['numLados', 'lado'], 'integer'],
            [['radio'], 'number'],
            [['discr'], 'string', 'max' => 255],
            [['workspace'], 'exist', 'skipOnError' => true, 'targetClass' => Workspace::className(), 'targetAttribute' => ['workspace' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numLados' => 'Número de lados',
            'discr' => 'Discr',
            'lado' => 'Lado',
            'base' => 'Base',
            'altura' => 'Altura',
            'hipotenusa' => 'Hipotenusa',
            'radio' => 'Radio',
            'workspace' => 'Workspace',
        ];
    }

    public static function instantiate($row)
    {
        switch ($row['discr']) {
            case Cuadrado::DISCR:
                return new Cuadrado();
            case Triangulo::DISCR:
                return new Triangulo();
            case Hexagono::DISCR:
                return new Hexagono();
            default:
                return new self;
        }

        return parent::instantiate($row);
    }

    public function getArea(){ return 0; }
    public function getPerimetro(){ return 0; }
    public function printr(){ return ''; }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkspace0()
    {
        return $this->hasOne(Workspace::className(), ['id' => 'workspace']);
    }

    public static function getFiguras($showWS = false)
    {
        $figuras = self::find()->all();

        $items = array();
        foreach ($figuras as $f){
            $ws = ''; //String workspace
            if($showWS){
                $ws .= $f->workspace . '* | ';
            }
            $items[$f->id] = $ws . $f->printr();
        }

        return $items;
    }

}

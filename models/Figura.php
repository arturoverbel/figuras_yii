<?php

namespace app\models;

use Yii;

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
        ];
    }
}

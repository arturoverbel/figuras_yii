<?php

namespace app\models;

use Yii;
use app\models\Figura;

/**
 * This is the model class for table "workspace".
 *
 * @property int $id
 * @property string $nombre
 * @property int $limiteFiguras
 *
 */
class Workspace extends \yii\db\ActiveRecord
{

    public $figuras = [];

    public function init()
    {
        parent::init();

        $this->loadFiguras();
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workspace';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'limiteFiguras'], 'required'],
            [['limiteFiguras'], 'integer'],
            [['nombre'], 'string', 'max' => 150],
            [['nombre'], 'string', 'max' => 150],
            ['figuras', 'each', 'rule' => [
                'exist', 'targetClass' => Figura::className(), 'targetAttribute' => 'id'
            ]],
            ['figuras', 'limiteFiguras'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'limiteFiguras' => 'Limite Figuras',
            'figuras' => 'Figuras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiguras()
    {
        return $this->hasMany(Figura::className(), ['workspace' => 'id']);
    }

    /**
     * save Figuras
     */
    public function saveFiguras(){

        $figures = Figura::find(['workspace' => $this->id]);


        if (is_array($this->figuras)) {

            foreach($this->figuras as $figura_id) {

                $fig = Figura::findOne($figura_id);
                $fig->workspace = $this->id;
                $fig->save();
            }
        }

    }

    /**
     * load Figuras
     */
    public function loadFiguras()
    {
        $this->figuras = [];
        if ( empty($this->id) ) return ;

        $this->figuras = Figura::find()
            ->where(['workspace' => $this->id])->all();


    }

    public static function getWorkspaces()
    {
        $workspaces = self::find()->all();

        $items = array();
        foreach ($workspaces as $w){
            $items[$w->id] = $w->nombre;
        }

        return $items;
    }

    public function limiteFiguras($attribute){

        if( ($this->limiteFiguras != null) && !empty($this->figuras)){

            if( intval($this->limiteFiguras) < count($this->figuras)  ){
                $this->addError($attribute, "Supera el límite de Figuras");
            }

        }

    }


}

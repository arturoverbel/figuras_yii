<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "figura".
 *
 * @property int $id
 * @property int $lado
 */
class Cuadrado extends \app\models\Figura
{

    public function init()
    {
        parent::init();
        $this->discr = 'cuadrado';
        $this->numLados = 4;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'figura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lado'], 'required'],
            [['lado'], 'integer'],
        ];
    }

}

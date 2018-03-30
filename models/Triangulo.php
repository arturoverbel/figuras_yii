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
 */
class Triangulo extends \app\models\Figura
{
    public function init()
    {
        parent::init();
        $this->discr = 'triangulo';
        $this->numLados = 3;
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
            [['base', 'altura', 'hipotenusa'], 'required'],
            [['base', 'altura', 'hipotenusa'], 'integer'],
        ];
    }

}

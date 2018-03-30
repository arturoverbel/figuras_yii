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
            [['numLados', 'discr', 'lado'], 'required'],
            [['numLados', 'lado'], 'integer'],
            [['discr'], 'string', 'max' => 255],
        ];
    }

}

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
class Hexagono extends \app\models\Figura
{
    public function init()
    {
        parent::init();
        $this->discr = 'hexagono';
        $this->numLados = 6;
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
            [['radio'], 'required'],
            [['radio'], 'number'],
        ];
    }

}

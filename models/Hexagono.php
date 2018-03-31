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

    public function getApotema(){
        return ($this->radio / 2) * sqrt(3);
    }

    public function getPerimetro(){
        return $this->radio * 6;
    }

    public function getArea() {
        return $this->getPerimetro() * $this->getApotema() / 2;
    }

    public function printr(){
        return '(Radio, Apotema) : (' . $this->radio . ', ' . $this->getApotema() . ")";
    }

}

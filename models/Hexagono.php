<?php

namespace app\models;

use Yii;

class Hexagono extends \app\models\Figura
{

    const DISCR = 'hexagono';

    public function init()
    {
        parent::init();
        $this->discr = self::DISCR;
        $this->numLados = 6;

        $this->print = $this->printr();
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
            [['workspace'], 'integer'],
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

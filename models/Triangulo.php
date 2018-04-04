<?php

namespace app\models;

use Yii;

class Triangulo extends \app\models\Figura
{

    const DISCR = 'triangulo';

    public function init()
    {
        parent::init();
        $this->discr = self::DISCR;
        $this->numLados = 3;

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
            [['base', 'altura', 'hipotenusa'], 'required'],
            [['base', 'altura', 'hipotenusa', 'workspace'], 'integer'],
        ];
    }

    public function getPerimetro(){
        return $this->altura + $this->base + $this->hipotenusa;
    }

    public function getArea() {
        $semiperimetro = $this->getPerimetro() / 2;
        $base = $semiperimetro * ($semiperimetro-$this->altura) * ($semiperimetro-$this->base) * ($semiperimetro-$this->hipotenusa);
        return sqrt($base);
    }

    public function printr(){
        return '(Base, Altura, Hipo) : (' . $this->base . ", " . $this->altura . ", " . $this->hipotenusa . ')';
    }

}

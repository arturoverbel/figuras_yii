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

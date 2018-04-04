<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "figura".
 *
 * @property int $id
 * @property int $lado
 * @property int $workspace
 */
class Cuadrado extends \app\models\Figura
{

    const DISCR = 'cuadrado';

    public function init()
    {
        parent::init();
        $this->discr = self::DISCR;
        $this->numLados = 4;

        $this->print = $this->printr();

        return $this;
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
            [['lado', 'workspace'], 'integer'],
        ];
    }

    public function getArea() {
        return pow($this->lado, 2);
    }

    public function getPerimetro(){
        return $this->lado * 4;
    }

    public function printr(){
        return '(Lado) : (' . $this->lado . ')';
    }

}

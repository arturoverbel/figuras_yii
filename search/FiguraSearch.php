<?php

namespace app\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Figura;

/**
 * FiguraSearch represents the model behind the search form of `app\models\Figura`.
 */
class FiguraSearch extends Figura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'numLados', 'lado', 'base', 'altura', 'hipotenusa'], 'integer'],
            [['discr'], 'safe'],
            [['radio'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Figura::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'numLados' => $this->numLados,
            'lado' => $this->lado,
            'base' => $this->base,
            'altura' => $this->altura,
            'hipotenusa' => $this->hipotenusa,
            'radio' => $this->radio
        ]);

        $query->andFilterWhere(['like', 'discr', $this->discr]);

        return $dataProvider;
    }
}

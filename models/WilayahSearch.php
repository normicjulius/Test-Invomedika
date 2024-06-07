<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbWilayah;

/**
 * WilayahSearch represents the model behind the search form of `app\models\TbWilayah`.
 */
class WilayahSearch extends TbWilayah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'longitude', 'langitude'], 'integer'],
            [['nama_wilayah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TbWilayah::find();

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
            'id_wilayah' => $this->id_wilayah,
            'longitude' => $this->longitude,
            'langitude' => $this->langitude,
        ]);

        $query->andFilterWhere(['like', 'nama_wilayah', $this->nama_wilayah]);

        return $dataProvider;
    }
}

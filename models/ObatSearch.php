<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbObat;

/**
 * ObatSearch represents the model behind the search form of `app\models\TbObat`.
 */
class ObatSearch extends TbObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_obat'], 'integer'],
            [['nama_obat', 'bentuk_sediaan', 'kekuatan'], 'safe'],
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
        $query = TbObat::find();

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
            'id_obat' => $this->id_obat,
        ]);

        $query->andFilterWhere(['like', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['like', 'bentuk_sediaan', $this->bentuk_sediaan])
            ->andFilterWhere(['like', 'kekuatan', $this->kekuatan]);

        return $dataProvider;
    }
}

<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `backend\models\Transaksi`.
 */
class TransaksiSearch extends Transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_pasien', 'nama_pegawai'], 'integer'],
            [['biaya_pendaftaran', 'biaya_obat', 'total', 'status'], 'safe'],
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
        $query = Transaksi::find();

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
            'nama_pasien' => $this->nama_pasien,
            'nama_pegawai' => $this->nama_pegawai,
        ]);

        $query->andFilterWhere(['like', 'biaya_pendaftaran', $this->biaya_pendaftaran])
            ->andFilterWhere(['like', 'biaya_obat', $this->biaya_obat])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}

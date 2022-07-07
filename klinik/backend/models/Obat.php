<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string|null $nama_obat
 * @property string|null $jenis_obat
 * @property string|null $stock
 * @property string|null $harga
 *
 * @property Resep[] $reseps
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'stock', 'harga'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'stock' => 'Stock',
            'harga' => 'Harga',
        ];
    }

    /**
     * Gets query for [[Reseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['nama_obat' => 'id']);
    }
}

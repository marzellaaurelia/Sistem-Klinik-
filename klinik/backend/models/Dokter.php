<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id
 * @property int $id_user
 * @property string|null $nama
 * @property string|null $spesialis
 * @property string|null $alamat
 * @property string|null $no_hp
 *
 * @property Pendaftaran[] $pendaftarans
 * @property Resep[] $reseps
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'spesialis', 'alamat', 'no_hp', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Kode Dokter',
            'nama' => 'Nama',
            'spesialis' => 'Spesialis',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Pendaftarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftarans()
    {
        return $this->hasMany(Pendaftaran::className(), ['spesialis' => 'id']);
    }

    /**
     * Gets query for [[Reseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['nama_dokter' => 'id']);
    }
}

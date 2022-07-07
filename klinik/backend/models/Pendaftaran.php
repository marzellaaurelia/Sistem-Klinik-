<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property int $no_pendaftaran
 * @property int $spesialis
 * @property int|null $poli
 * @property string|null $nama_pasien
 * @property string|null $tanggal_daftar
 * @property string|null $jenis_kelamin
 * @property string|null $alamat
 * @property string|null $no_hp
 *
 * @property Poli $poli0
 * @property Resep[] $reseps
 * @property Dokter $spesialis0
 * @property Tindakan[] $tindakans
 * @property Transaksi[] $transaksis
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spesialis'], 'required'],
            [['spesialis', 'poli'], 'integer'],
            [['tanggal_daftar'], 'safe'],
            [['nama_pasien', 'jenis_kelamin', 'alamat', 'no_hp'], 'string', 'max' => 255],
            [['spesialis'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['spesialis' => 'id']],
            [['poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poli::className(), 'targetAttribute' => ['poli' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pendaftaran' => 'No Pendaftaran',
            'spesialis' => 'Spesialis',
            'poli' => 'Poli',
            'nama_pasien' => 'Nama Pasien',
            'tanggal_daftar' => 'Tanggal Daftar',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
        ];
    }

    /**
     * Gets query for [[Poli0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoli0()
    {
        return $this->hasOne(Poli::className(), ['id' => 'poli']);
    }

    /**
     * Gets query for [[Reseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['nama_pasien' => 'no_pendaftaran']);
    }

    /**
     * Gets query for [[Spesialis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpesialis0()
    {
        return $this->hasOne(Dokter::className(), ['id' => 'spesialis']);
    }

    /**
     * Gets query for [[Tindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakans()
    {
        return $this->hasMany(Tindakan::className(), ['nama_pasien' => 'no_pendaftaran']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['nama_pasien' => 'no_pendaftaran']);
    }
}

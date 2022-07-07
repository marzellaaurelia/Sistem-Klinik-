<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int $nama_pasien
 * @property int $nama_pegawai
 * @property string|null $biaya_pendaftaran
 * @property string|null $biaya_obat
 * @property string|null $total
 * @property string|null $status
 *
 * @property Pendaftaran $namaPasien
 * @property Pegawai $namaPegawai
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_pegawai'], 'required'],
            [['nama_pasien', 'nama_pegawai'], 'integer'],
            [['biaya_pendaftaran', 'biaya_obat', 'total', 'status'], 'string', 'max' => 255],
            [['nama_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::className(), 'targetAttribute' => ['nama_pasien' => 'no_pendaftaran']],
            [['nama_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['nama_pegawai' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pasien' => 'Nama Pasien',
            'nama_pegawai' => 'Nama Pegawai',
            'biaya_pendaftaran' => 'Biaya Pendaftaran',
            'biaya_obat' => 'Biaya Obat',
            'total' => 'Total',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[NamaPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPasien()
    {
        return $this->hasOne(Pendaftaran::className(), ['no_pendaftaran' => 'nama_pasien']);
    }

    /**
     * Gets query for [[NamaPegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'nama_pegawai']);
    }
}

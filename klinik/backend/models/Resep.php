<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "resep".
 *
 * @property int $id
 * @property int $nama_pasien
 * @property int $nama_dokter
 * @property int $nama_obat
 * @property string|null $catatan
 *
 * @property Dokter $namaDokter
 * @property Obat $namaObat
 * @property Pendaftaran $namaPasien
 */
class Resep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_dokter', 'nama_obat'], 'required'],
            [['nama_pasien', 'nama_dokter', 'nama_obat'], 'integer'],
            [['catatan'], 'string', 'max' => 255],
            [['nama_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['nama_dokter' => 'id']],
            [['nama_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::className(), 'targetAttribute' => ['nama_obat' => 'id']],
            [['nama_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::className(), 'targetAttribute' => ['nama_pasien' => 'no_pendaftaran']],
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
            'nama_dokter' => 'Nama Dokter',
            'nama_obat' => 'Nama Obat',
            'catatan' => 'Catatan',
        ];
    }

    /**
     * Gets query for [[NamaDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaDokter()
    {
        return $this->hasOne(Dokter::className(), ['id' => 'nama_dokter']);
    }

    /**
     * Gets query for [[NamaObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaObat()
    {
        return $this->hasOne(Obat::className(), ['id' => 'nama_obat']);
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
}

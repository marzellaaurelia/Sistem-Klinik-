<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "apoteker".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $jabatan
 * @property string|null $alamat
 * @property string|null $no_hp
 */
class Apoteker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apoteker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jabatan', 'alamat', 'no_hp', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Kode Apoteker',
            'nama' => 'Nama',
            'jabatan' => 'Jabatan',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email'
        ];
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "poli".
 *
 * @property int $id
 * @property string|null $nama_poli
 *
 * @property Pendaftaran[] $pendaftarans
 */
class Poli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_poli'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_poli' => 'Nama Poli',
        ];
    }

    /**
     * Gets query for [[Pendaftarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftarans()
    {
        return $this->hasMany(Pendaftaran::className(), ['poli' => 'id']);
    }
}

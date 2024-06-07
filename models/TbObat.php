<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $bentuk_sediaan
 * @property string $kekuatan
 */
class TbObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'bentuk_sediaan', 'kekuatan'], 'required'],
            [['nama_obat', 'bentuk_sediaan', 'kekuatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'bentuk_sediaan' => 'Bentuk Sediaan',
            'kekuatan' => 'Kekuatan',
        ];
    }
}

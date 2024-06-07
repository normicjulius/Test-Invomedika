<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $jabatan
 * @property int $nomor_pegawai
 * @property string $alamat_pegawai
 */
class TbPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'jabatan', 'nomor_pegawai', 'alamat_pegawai'], 'required'],
            [['nomor_pegawai'], 'integer'],
            [['nama_pegawai', 'jabatan', 'alamat_pegawai'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'jabatan' => 'Jabatan',
            'nomor_pegawai' => 'Nomor Pegawai',
            'alamat_pegawai' => 'Alamat Pegawai',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pendaftaran".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $jenis_kelamin
 * @property int $id_wilayah
 * @property string $alamat
 * @property int $nomor_telepon
 */
class TbPendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'jenis_kelamin', 'id_wilayah', 'alamat', 'nomor_telepon'], 'required'],
            [['id_wilayah', 'nomor_telepon'], 'integer'],
            [['alamat'], 'string'],
            [['nama_pasien'], 'string', 'max' => 100],
            [['jenis_kelamin'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'jenis_kelamin' => 'Jenis Kelamin',
            'id_wilayah' => 'Id Wilayah',
            'alamat' => 'Alamat',
            'nomor_telepon' => 'Nomor Telepon',
        ];
    }
}

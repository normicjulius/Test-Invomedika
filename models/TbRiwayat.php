<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "tb_riwayat".
 *
 * @property int $id_riwayat
 * @property int $id_pasien
 * @property string $keluhan
 * @property int $id_tindakan
 * @property int $id_obat
 */
class TbRiwayat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_riwayat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'keluhan', 'id_tindakan', 'id_obat'], 'required'],
            [['id_pasien', 'id_tindakan', 'id_obat'], 'integer'],
            [['keluhan'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_riwayat' => 'Id Riwayat',
            'id_pasien' => 'Nama Pasien',
            'keluhan' => 'Keluhan',
            'id_tindakan' => 'Tindakan Yang Diperlukan',
            'id_obat' => 'Obat Yang Diberikan',
        ];
    }

    public function getPasien()
    {
        // same as above
        return $this->hasOne(TbPendaftaran::className(), ['id_pasien' => 'id_pasien']);
    }

    public function getTindakan()
    {
        // same as above
        return $this->hasOne(TbTindakan::className(), ['id_tindakan' => 'id_tindakan']);
    }

    public function getObat()
    {
        // same as above
        return $this->hasOne(TbObat::className(), ['id_obat' => 'id_obat']);
    }
}

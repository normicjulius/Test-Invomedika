<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_wilayah".
 *
 * @property string $id_wilayah
 * @property string $nama_wilayah
 * @property int $longitude
 * @property int $langitude
 */
class TbWilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'nama_wilayah', 'longitude', 'langitude'], 'required'],
            [['longitude', 'langitude'], 'integer'],
            [['id_wilayah'], 'string', 'max' => 25],
            [['nama_wilayah'], 'string', 'max' => 100],
            [['id_wilayah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
            'longitude' => 'Longitude',
            'langitude' => 'Langitude',
        ];
    }
}

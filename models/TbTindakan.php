<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tindakan".
 *
 * @property int $id_tindakan
 * @property string $tindakan
 */
class TbTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindakan'], 'required'],
            [['tindakan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'tindakan' => 'Tindakan',
        ];
    }

    
}

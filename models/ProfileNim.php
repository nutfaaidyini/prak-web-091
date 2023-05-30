<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile_nim".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $foto_profile
 */
class ProfileNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa', 'foto_profile'], 'required'],
            [['id'], 'integer'],
            [['id_mahasiswa', 'foto_profile'], 'string', 'max' => 25],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profile' => 'Foto Profile',
        ];
    }
}

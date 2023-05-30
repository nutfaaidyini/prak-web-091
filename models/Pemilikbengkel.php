<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemilikbengkel".
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $tgl_lahir
 * @property int $no_telp
 */
class Pemilikbengkel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemilikbengkel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name', 'tgl_lahir', 'no_telp'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['no_telp'], 'integer'],
            [['username', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'tgl_lahir' => 'Tgl Lahir',
            'no_telp' => 'No Telp',
        ];
    }

    public function getProfilenim()
{
    //same as above
    return $this->hasOne(ProfileNim::class, ['id_mahasiswa' => 'id']);
}
}
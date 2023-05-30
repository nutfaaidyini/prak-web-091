<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa091".
 *
 * @property int $id091
 * @property string $nim091
 * @property string $nama091
 * @property string $kelas091
 * @property string $status091
 */
class Mahasiswa091 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa091';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim091', 'nama091', 'kelas091', 'status091'], 'required'],
            [['nim091'], 'string', 'max' => 25],
            [['nama091'], 'string', 'max' => 225],
            [['kelas091'], 'string', 'max' => 10],
            [['status091'], 'string', 'max' => 50],
            [['nim091'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id091' => 'ID091',
            'nim091' => 'No. Induk Mahasiswa091',
            'nama091' => 'Nama Mahasiswa091',
            'kelas091' => 'Kelas091',
            'status091' => 'Status091',
        ];
    }
}

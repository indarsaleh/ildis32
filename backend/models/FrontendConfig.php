<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class FrontendConfig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'frontend_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['created_at', 'updated_at'], 'safe'],
            [['nama_konfig','jenis'], 'string', 'max' => 255],
            [['isi_konfig', 'default'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_konfig' => 'Nama Konfig',
            'isi_konfig' => 'Isi Konfig',
            // 'default' => 'Default',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
        ];
    }

    // public function behaviors()
    // {
    //     return [
    //         'timestamp' => [
    //             'class' => 'yii\behaviors\TimestampBehavior',
    //             'attributes' => [
    //                 ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
    //                 ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
    //             ],
    //             'value' => new Expression('NOW()'),
    //         ],
    //         'blameable' => [
    //             'class' => BlameableBehavior::className(),
    //             'createdByAttribute' => 'created_by',
    //             'updatedByAttribute' => 'updated_by',
    //         ],
    //     ];
    // }

    // public function getTanggal($tanggal)  // fungsi atau method untuk mengubah hari, tanggal ke format indonesia
    // {
    //     $BulanIndo = array("","Januari", "Februari", "Maret","April", "Mei", "Juni","Juli", "Agustus", "September","Oktober", "November", "Desember");
    //     $HariIndo= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    //     $sepparator = '-';
    //     $parts = explode($sepparator, $tanggal);

    //     //$hari = $HariIndo[date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]))]; //mendapatkan hari indonesia
    //     $tgl   = substr($tanggal, 8, 2); // memisahkan format tanggal menggunakan substring
    //     $bulan = substr($tanggal, 5, 2); // memisahkan format bulan menggunakan substring   
    //     $tahun = substr($tanggal, 0, 4); // memisahkan format tahun menggunakan substring

    //     //$result = $hari .", " .$tgl . " " . $BulanIndo[(int)$bulan] . " ". $tahun;
    //     $result = $tgl . " " . $BulanIndo[(int)$bulan] . " ". $tahun;
    //     return($result);
    // }

}

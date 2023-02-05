<?php

use mdm\admin\components\Helper;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeraturanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Verifikasi Data Peraturan';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php Pjax::begin(['enablePushState' => false]); ?>

<div class="box-body table-responsive no-padding">
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    <?= GridView::widget([

        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Data Verifikasi' . 'Peraturan' . '</h3>',
        ],
        'toolbar' =>  [

            '{export}',
            '{toggleData}'
        ],
        'dataProvider' => $dataProvider,
        'summary' => 'Ditampilkan {begin} - {end} dari {totalCount} Data',
        'filterModel' => $searchModel,
        'layout' => "{items}\n{summary}\n{pager}",
        'columns' => [

            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width: 50px;', 'class' => 'text-center'],
                'header' => 'No',
                'headerOptions' => ['class' => 'text-center'],
            ],

            //'id',
            //'tipe_dokumen:ntext',
            //  'jenis_peraturan',

            // [
            //     'attribute' => 'tipe_dokumen',
            //     'label' => 'Jenis Dokumen Hukum',
            //     'headerOptions' => ['style' => 'width:200px'],
            //     'contentOptions' => ['style' => 'width:auto; white-space: normal;'],
            //     'filterType' => GridView::FILTER_SELECT2,
            //     'filterWidgetOptions' => [
            //         'options' => ['prompt' => 'Pilih Jenis'],
            //         'pluginOptions' => [
            //             'allowClear' => true,
            //             //  'width'=>'resolve',
            //         ],
            //     ],

            //     'filter' => ArrayHelper::map(\backend\models\JenisPeraturan::find()->where(['parent_id' => 0])->all(), 'id', 'name'),
            //     'value' => function ($data) {
            //         return $data->getJenis($data->tipe_dokumen);
            //     }, //'tipe_dokumen',
            // ],

            [
                'attribute' => 'jenis_peraturan',
                'label' => 'Jenis Monografi',
                'headerOptions' => ['style' => 'width:200px'],
                'contentOptions' => ['style' => 'width:200; white-space: normal;'],
                'filterType' => GridView::FILTER_SELECT2,
                'filterWidgetOptions' => [
                    'options' => ['prompt' => 'Pilih Jenis'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        //  'width'=>'resolve',
                    ],
                ],
                'filter' => ArrayHelper::map(\backend\models\JenisPeraturan::find()->where(['parent_id' => 2])->all(), 'name', 'name'),
                'value' => 'jenis_peraturan',
            ],





            [
                'attribute' => 'judul',
                'label' => 'Judul Monografi',
                'contentOptions' => ['style' => 'width:auto; white-space: normal;'],
                'content' => function ($data) {

                    return $data->getJudul($data->id);
                    //return Html::a(strtoupper($data->judul), ['view', 'id' => $data->id]);
                }
            ],

            // 'subjek',




            [
                'label' => 'Tahun',
                'attribute' => 'tahun_terbit',
            ],

            // [
            //     'label' => 'ISBN',
            //     'attribute' => 'isbn',
            // ],

            // [
            //     'label' => 'Penerbit',
            //     'attribute' => 'penerbit',
            // ],
            'sumber_perolehan',
            [
                'label' => 'Subyek',
                'content' => function ($data) {
                    return $data->getSubyek2($data->id);
                }

            ],

            // [
            //     'label' => 'Jumlah Buku',
            //     'content' => function ($data) {
            //         return $data->getJumlah($data->id);
            //     }

            // ],
            [
                'label' => 'Kode Eksemplar',
                'content' => function ($data) {
                    return $data->getEksemplar($data->id);
                }

            ],


            [


                'attribute' => 'is_publish',
                'label' => 'Status Verifikasi',
                'filter' => [1 => 'Verified', 0 => 'UnVerified'],
                'format' => 'raw',
                'options' => [
                    'width' => '100px',
                ],
                'value' => function ($data) {
                    if ($data->is_publish == 1)
                        return "<span class='label label-primary'>" . 'Verified' . "</span>";
                    else
                        return "<span class='label label-danger'>" . 'UnVerified' . "</span>";
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['style' => 'width: 150px;', 'class' => 'text-center'],
                'contentOptions' => ['style' => 'width: 150px;', 'class' => 'text-center'],
                'header' => 'Aksi',
                'template' => Helper::filterActionColumn('{view}&nbsp;&nbsp;{update}&nbsp;&nbsp;{action}'),

                'buttons' => [
                    'view' => function ($url, $model) {
                        return
                        Html::a('<span class="btn btn-sm btn-info"><b class="fa fa-search-plus"></b></span>', ['view', 'id' => $model->id], ['title' => 'Lihat']);
                    },

                    'update' => function ($id, $model) {
                        return Html::a('<span class="btn btn-sm btn-warning"><b class="fa fa-pencil"></b></span>', ['update-peraturan', 'id' => $model->id], ['title' => 'Ubah']);
                    },

                    'action' => function ($url, $model) {
                        if ($model->is_publish == 1) {
                            //return Html::a('<span class="fa fa-check-square"></span>',['inactive', 'id'=>$model->id], ['title'=>'Batalkan Verikasi','class' => 'btn btn-success btn-sm user-active']);

                            return Html::a('<span class="fa fa-check-square"></span>', ['inactive', 'id' => $model->id], ['title' => 'Batalkan Verikasi', 'class' => 'btn btn-success btn-sm user-active', 'data' => ['confirm' => 'Yakin membatalkan verifikasi ?', 'method' => 'post', 'data-pjax' => false],]);
                        } else {
                            //return Html::a('<span class="fa fa-ban"></span>',['active', 'id'=>$model->id], ['title'=>'verifikasi/Publish Produk Hukum','class' => 'btn btn-danger btn-sm user-inactive']);

                            return Html::a('<span class="fa fa-ban"></span>', ['active', 'id' => $model->id], ['title' => 'verifikasi/Publish Produk Hukum', 'class' => 'btn btn-success btn-sm user-inactive', 'data' => ['confirm' => 'Yakin ingin memverifikasi ?', 'method' => 'post', 'data-pjax' => false],]);
                        }
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
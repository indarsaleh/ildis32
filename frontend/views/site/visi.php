<?php

use yii\helpers\Html;
use backend\models\FrontendConfig;
$visi = FrontendConfig::findOne(10); 
?>

<section>
    <img src="frontend/assets/img/bluetop.jpg" class="img-fluid" alt="">
   <br><br><br>
    <div class="container">
    </div>

    <div class="container">
        <div class="text-center">
            <p><?= Html::a('Home', ['/']); ?></p>
            <p><span class="active">Tentang Kami</span>
            </p>
        </div>
    </div>
    <br><br>
    <div class="container">
       <?= $visi->isi_konfig?>
   </div>
</section>
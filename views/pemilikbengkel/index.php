<?php

use app\models\Pemilikbengkel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveProvider $dataProvider */

?>
<div class="pemilikbengkel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Bengkel Baru', ['class' => 'btn btn-primary']) ?>
    </p>


    <?=GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            'name',
            'tgl_lahir',
            'no_telp',
            'profilenim.foto_profile',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function($action, Pemilikbengkel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
         ],
    ]); ?>


</div>
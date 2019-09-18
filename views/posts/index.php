<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-form-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Posts Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'body:ntext',
            'created_at',
            'updated_at',
            'author_id',
            'updater_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

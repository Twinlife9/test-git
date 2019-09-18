<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostsForm */

$this->title = 'Update Posts Form: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Posts Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

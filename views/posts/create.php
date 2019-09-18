<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostsForm */

$this->title = 'Create Posts Form';
$this->params['breadcrumbs'][] = ['label' => 'Posts Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

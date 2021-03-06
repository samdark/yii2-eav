<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model mirocow\eav\models\EavAttributeValue */

$this->title = 'Create Eav Attribute Value';
$this->params['breadcrumbs'][] = ['label' => 'EAV', 'url' => ['/eav']];
$this->params['breadcrumbs'][] = ['label' => 'Eav Attribute Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eav-attribute-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

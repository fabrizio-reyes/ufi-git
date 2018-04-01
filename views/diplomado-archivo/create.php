<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiplomadoArchivo */

$this->title = 'Create Diplomado Archivo';
$this->params['breadcrumbs'][] = ['label' => 'Diplomado Archivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diplomado-archivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perfil */

$this->title = 'Creando Perfil';
$this->params['breadcrumbs'][] = ['label' => 'Perfiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model2,
    ]) ?>
	
	</div>

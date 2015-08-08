<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Esta página é sobre o CRUD de ALUNOS e CURSOS do ICOMP.
    </p>

    <p>Hoje é <?= $data ?></p>
    <code><?= __FILE__ ?></code>
</div>

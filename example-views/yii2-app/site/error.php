<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$this->params['breadcrumbs'][] = 'Error Page';
?>
<!-- Main content -->
<section class="content">
    <div class="error-page">

        <h2 class="headline text-yellow"><?= $exception->statusCode ?></h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> <?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->
</section><!-- /.content -->

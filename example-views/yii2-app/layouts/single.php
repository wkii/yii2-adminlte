<?php
/**
 * single page layout. No sidebar, no control-sidebar, no footer, no content-header, no breadcrumbs.
 * for iframe dialog.
 * e.g. in action: $this->layout = 'single';
 */
use yii\helpers\Html;
use Wkii\AdminLTE\Widgets\Alert;

Wkii\AdminLTE\Asset\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= Html::encode($this->title) ?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="hold-transition">
<?php $this->beginBody() ?>
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0;">
        <!-- Main content -->
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
    </div><!-- /.content -->
</div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

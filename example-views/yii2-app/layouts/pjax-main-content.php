<?php
/**
 * Pjax content Layout For pjax-main.
 * no css,js,header,footer.
 * For pjax. No include content-footer.
 */
use Wkii\AdminLTE\Widgets\Alert;

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="pjax-container">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Optional description</small>' : '';
                } ?>
            </h1>
        <?php } ?>

        <?=
        Wkii\AdminLTE\widgets\Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        )
        ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
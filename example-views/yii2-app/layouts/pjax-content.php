<?php
/**
 * Pjax content Layout.
 * It's only have section 'content-header' and 'content'.
 * `content-header` used to output the content part of title and breadcrumbs
 * @auther Terry
 */

use Wkii\AdminLTE\Widgets\Alert;

?>

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

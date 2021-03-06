<?php

use dmstr\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
    <section class="content-header" style="background: #f6f8f8; padding: 20px; border-bottom: 1px solid #dee5e7">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1 style="font-weight: 300"><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1 style="font-weight: 300">
                <?php
                    if ($this->title !== null) {
                        echo Html::encode($this->title);
                    } else {
                        echo Inflector::camel2words(
                            Inflector::id2camel($this->context->module->id)
                        );
                        echo ($this->context->module->id !== Yii::$app->id) ? '<small>Module</small>' : 's';
                    }
                    ?>
            </h1>

        <?php } ?>

        <?=
            Breadcrumbs::widget(
                [
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
            )
        ?>
    </section>

    <div class="wrapper">

        <div class="content-wrapper">

            <div class="container">
                <section class="content">
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </section>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="https://yiisolution.blogspot.com/">Yii Solution</a> | <a href="https://www.contohapps.com/">Contoh Aplikasi</a></strong> | <strong><a href="http://sttindonesia.ac.id/">STT Indonesia</a>.</strong> All rights
    reserved.
</footer>
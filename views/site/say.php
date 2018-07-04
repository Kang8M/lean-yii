<?php

/**
 * @var $this yii\web\View
 * @var \app\controllers\SiteController
 * @var $message string
 */

use yii\helpers\Html;

$this->title = 'Say';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::encode($message); ?>
    </p>
</div>

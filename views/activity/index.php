<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 23:00
 */
?>
<h1>Событие: <?= $model->title ?></h1>

<h3><?= $model->getAttributeLabel('startDay') ?></h3>
<p><?= $model->startDay ?></p>

<h3><?= $model->getAttributeLabel('endDay') ?></h3>
<p><?= $model->endDay ?></p>

<h3><?= $model->getAttributeLabel('bodyDay') ?></h3>
<p><?= $model->body ?></p>

<p>Создал: <?= $model->idAuthor ?></p>
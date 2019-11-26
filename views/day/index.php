<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 23:10
 */
?>

<h1>День: <?= $model->name ?></h1>

<?php if ($model->isWorkDay): ?>
    <p>Рабочий день</p>
<?php else: ?>
    <p>Выходной день</p>
<?php endif; ?>
<hr>

<h3><?= $model->getAttributeLabel('activities') ?></h3>
<?php if ($model->activities): ?>
    <?php foreach ($model->activities as $activity): ?>
        <p><?= $activity ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>В этот день событий нет</p>
<?php endif; ?>

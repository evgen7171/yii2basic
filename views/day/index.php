<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 23:10
 */

use \yii\helpers\Html;

?>

<?php foreach ($models as $model): ?>
    <?= Html::beginTag('div', ['class' => 'message-comp-text']) ?>

    <?= \Yii::$app->messenger->display($model['title'], [
        'isBlock' => true, 'editButtons' => ['edit', 'delete'], 'id'=>$model['id']]); ?>

    <div class="flex">
        <?= Html::beginTag('div', ['style' => 'margin-left: 10px;']) ?>
        <?= Html::tag('div', $model['body']) ?>
        <div>
            <span>автор: <?= $model['idAuthor'] ?></span>
            <span><?= $model['main'] ? '(блокирующее)' : ''; ?></span>
            <span><?= $model['repeat'] ? '(повторяемое)' : ''; ?></span>
        </div>
        <?= Html::endTag('div') ?>

        <?= Html::beginTag('div') ?>

        <?= Html::beginTag('div', ['class' => 'flex']) ?>
        <?php $start_date = date('d.m.Y', strtotime($model['start_day'])); ?>
        <?= Html::tag('div', 'начало: ' . $start_date, ['class' => 'm-right']) ?>
        <?= Html::endTag('div') ?>

        <?= Html::beginTag('div', ['class' => 'flex']) ?>
        <?php $end_date = date('d.m.Y', strtotime($model['end_day'])); ?>
        <?= Html::tag('div', 'окончание: ' . $end_date, ['class' => 'm-right']) ?>
        <?= Html::endTag('div') ?>

        <?= Html::endTag('div') ?>
    </div>
    <?= Html::endTag('div') ?>
<?php endforeach; ?>
<br>
<?= Html::a('Создать событие', ['../activity/create'], ['class' => 'btn btn-success']) ?>
<br>
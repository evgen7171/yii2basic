<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 27.11.2019
 * Time: 21:03
 */

use yii\helpers\Html;

?>

<div class="tiles">
    <?php foreach ($days as $day): ?>
        <a href="/day/view?date=<?= $day['date'] ?>" class="tile <?= $day['isWeekend'] ? 'weekend' : '' ?>">
            <p><?= $day['date'] ?></p>
            <h3><?= $day['weekday'] ?></h3>
        </a>
    <?php endforeach; ?>
</div>


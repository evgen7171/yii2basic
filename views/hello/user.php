<?php
/**
 * Created by PhpStorm.
 * UsersController: Админ
 * Date: 24.11.2019
 * Time: 23:28
 */

?>

Привет, <?= $username ?>!
<hr>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($images as $key => $img): ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?=$key?>" class="<?=!$key?"active":""?>"></li>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner hello-carousel" role="listbox">
        <?php foreach ($images as $key => $img): ?>
            <div class="<?=!$key?"item active":"item"?>">
                <img src="<?= $img ?>" alt="...">
            </div>
        <?php endforeach; ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
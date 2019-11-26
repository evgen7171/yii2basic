<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:25
 */

namespace app\models;

/**
 * сущность события
 * Class Activity
 * @package app\models
 */
class Activity extends \yii\base\Model
{
    /**
     * повторяемость события
     * @var string | array
     */
    public $repeat;

    /**
     * основное (блокирующее) событие
     * - блокирует создание других событий в этот день
     * @var boolean
     */
    public $main;

    /**
     * название события
     * @var
     */
    public $title;

    /**
     * день начала события
     * - в формате unix timestamp
     * @var int
     */
    public $startDay;

    /**
     * день завершения события
     * - в формате unix timestamp
     * @var int
     */
    public $endDay;
    /**
     * автор события
     * @var int
     */
    public $idAuthor;

    /**
     * описание события
     * @var string
     */
    public $body;

    public function attributeLabels()
    {
        return [
            'title' => 'Название события',
            'startDay' => 'Дата начала',
            'endDay' => 'Дата завершения',
            'idAuthor' => 'ID автора',
            'body' => 'Описание события'
        ];
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:37
 */

namespace app\models;

use yii\db\ActiveRecord;

class Day extends ActiveRecord // \yii\base\Model
{
    /**
     * дата дня
     * - в формате (timestamp)
     * @var int
     */
    public $date;

    /**
     * события дня
     * @var array
     */
    public $activities;

    public function attributeLabels()
    {
        return [
            'date' => 'Дата',
            'activities' => 'События'
        ];
    }
}
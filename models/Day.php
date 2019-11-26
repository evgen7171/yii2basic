<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:37
 */

namespace app\models;

class Day extends \yii\base\Model
{
    /**
     * Рабочий или выходной день
     * @var boolean
     */
    public $isWorkDay;

    /**
     * название дня
     * @var string
     */
    public $name;

    /**
     * события дня
     * @var array
     */
    public $activities;

    public function attributeLabels()
    {
        return [
            'name' => 'День недели',
            'isWorkDay' => 'Рабочий или выходной день',
            'activities' => 'События'
        ];
    }
}
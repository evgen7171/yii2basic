<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 23:36
 */

namespace app\components;

use yii\base\Component;
use yii\helpers\Html;

class MessengerComponent extends Component
{
    public $message;
    public $link;

    public function init()
    {
        parent::init();
        $this->message = "Текст сообщения";
        $this->link = '';
    }

    public function display($textMessage, $linkMessage = '')
    {
        $this->message = $textMessage;
        $this->link = $linkMessage;

        if ($this->link != '') {
            $elem = Html::tag('a', $this->message . ' ( ' . $this->link . ' )', [
                'style' => 'cursor: pointer',
                'href' => $this->link
            ]);
        } else {
            $elem = Html::tag('p', $this->message);
        }
        return $elem;
    }
}

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
    public $html;
    public $link;
    public $isBlock;

    public function init()
    {
        parent::init();
        $this->message = "Текст сообщения";
        $this->link = '';
    }

    public function display($textMessage, $param = [])
    {
        $this->message = $textMessage;
        $this->link = $param['link'];
        $this->isBlock = $param['isBlock'];

        if ($this->link && !$this->isBlock) {
            $elem = Html::tag('a', $this->message . ' ( ' . $this->link . ' )', [
                'class' => 'message-comp-link ',
                'href' => $this->link
            ]);
        } else if ($this->link && $this->isBlock) {
            $elem = Html::tag('a', $this->message . ' ( ' . $this->link . ' )', [
                'class' => 'message-comp-link ',
                'style' => 'backgroundcolor: #ccc;',
                'href' => $this->link
            ]);
        } else {
            $elem = Html::beginTag('p', [
                'class' =>
                    'message-comp-text ' .
                    $this->isBlock ? 'message-comp-block' : 'message-comp-text',
                'style' => 'display: flex; justify-content: space-between;'
            ]);
            $elem .= $this->message;
            if (isset($param['editButtons'])) {
                $this->getEditButtonsHtml($elem, $param);
            }
            $elem .= Html::endTag('p');
        }
        return $elem;
    }

    public function getEditButtonsHtml(&$elem, $param)
    {
        $btns = $param['editButtons'];
        $elem .= Html::beginTag('span', ['class' => 'right-buttons']);
        if (in_array('edit', $btns)) {
            $elem .= Html::a('	&#x270f;', [
                ['../activity/update', 'id' => $param['id']]
            ]);
        }
        if (in_array('delete', $btns)) {
            $elem .= Html::a('&#x2718;',
                ['../activity/delete', 'id' => $param['id']],
                ['data' =>
                    [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post'
                    ]
                ]);
        }
        $elem .= Html::endTag('span');
    }
}

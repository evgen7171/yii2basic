<?php
/**
 * Created by PhpStorm.
 * UsersController: Админ
 * Date: 25.11.2019
 * Time: 17:57
 */

namespace app\modules\admin\controllers;

use app\models\User;
use Yii;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (!$this->isAdmin()) {
            return $this->render('error');
        };
        return $this->render('index');
    }

    public function isAdmin()
    {
        return User::getUserName() == 'admin';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 24.11.2019
 * Time: 23:22
 */

namespace app\controllers;

use app\models\User;
use Yii;
use \yii\web\Controller;

class HelloController extends Controller
{
    public function actionUser()
    {
        $username = !Yii::$app->user->isGuest ?
            User::findIdentity(Yii::$app->user->getId())->username :
            'гость';
        return $this->render('user', ['username' => $username]);
    }
}
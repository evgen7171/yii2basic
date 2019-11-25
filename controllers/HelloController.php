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
        $id = Yii::$app->user->identity->getId();
        $username = User::findIdentity($id)->username;
        return $username ?
            $this->render('user', ['username' => $username]) :
            $this->render('error');
    }
}
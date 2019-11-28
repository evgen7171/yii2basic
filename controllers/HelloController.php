<?php
/**
 * Created by PhpStorm.
 * UsersController: Админ
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
            User::getUserName() :
            'гость';
        return $this->render('user', ['username' => $username, 'images' => $this->getImages()]);
    }

    public function actionUserUser()
    {
        $model = new \app\models\ContactForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('user-user', [
            'model' => $model,
        ]);
    }

    public function getImages()
    {
        $dir = '/images/hello';
        $files = scandir($_SERVER['DOCUMENT_ROOT'] . $dir);
        $images = [];
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $images[] = $dir . '/' . $file;
        }
        return $images;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:39
 */

namespace app\controllers;

use app\models\Activity;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        $model = new Activity();
        return $this->render('index', [
            'model' => $model
        ]);
    }
    public function actionCreate(){}
    public function actionDelete(){}
}
<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:42
 */

namespace app\controllers;

use app\models\Day;
use yii\web\Controller;

class DayController extends Controller
{
    public function actionIndex()
    {
        $model = new Day();
        return $this->render('index', [
            'model' => $model
        ]);
    }
    public function actionCreate(){}
    public function actionDelete(){}
}
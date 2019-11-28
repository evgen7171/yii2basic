<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.11.2019
 * Time: 22:42
 */

namespace app\controllers;

use app\models\Activity;
use app\models\Day;
use DateTime;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DayController extends Controller
{
    public function actionIndex()
    {
        $model = new Day();
        return $this->render('index', [
            'model' => $model
        ]);
    }

    /**
     * показать все дни календаря
     * @return string
     */
    public function actionAll()
    {
        $startDay = strtotime('2019-11-30');
        $endDay = strtotime('2019-12-08');
        $interval = ($endDay - $startDay) / (60 * 60 * 24);

        for ($i = 0; $i <= $interval; $i++) {
            $dateInt = $i * (60 * 60 * 24) + $startDay;
            $weekday = date('l', $dateInt);
            $days[] = [
                'date' => date('d.m.Y', $dateInt),
                'weekday' => $weekday,
                'isWeekend' => $weekday == 'Saturday' || $weekday == 'Sunday'
            ];
        }

        return $this->render('all', [
            'days' => $days
        ]);
    }

    /**
     * Displays a single Activity model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($date)
    {
        $models = $this->getActivities($date);
        if($models) {
            return $this->render('index', [
                'models' => $models,
            ]);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function getActivities($date)
    {
        $strDate = strtotime($date);
        $models = Activity::find()
            ->where(['<', 'start_day', $strDate])
            ->orWhere(['>', 'end_day', $strDate])
            ->asArray()
            ->all();
        return $models;
    }

}
<?php

namespace frontend\controllers;

use Yii;
use common\models\TimeReserved;
use common\models\QuestsTimes;
use common\models\Quest;
use yii\helpers\Html;
use yii\web\Controller;

/**
 * QuestController implements the CRUD actions for Quest model.
 */
class QuestController extends Controller
{

    public function actionChecktime()
    {
        $time = Yii::$app->request->post('time');
        $date = Yii::$app->request->post('date');
        $quest = Yii::$app->request->post('quest');
        $timeReserved = new TimeReserved();
        if ($timeReserved->isTimeReserved($time,$date,$quest)){
            return "Данное время занято";
        } else {
            if ($this->Booking($time,$date,$quest)){
                return "Booked";
            } else {
                return "error during gathering page data";
            }
        }
    }

    private function Booking($time,$date,$quest)
    {
        $reservingObject = new TimeReserved();
        return $reservingObject->bookQuest($time,$date,$quest);
    }

}

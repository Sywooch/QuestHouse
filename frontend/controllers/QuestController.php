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
        if (!\Yii::$app->user->isGuest) {
            $time = Yii::$app->request->post('time');
            $date = Yii::$app->request->post('date');
            $quest = Yii::$app->request->post('quest');

            $questModel = new Quest();

            $newDate = date("Y-m-d", strtotime($date));

            $timeReserved = new TimeReserved();
            $questId = $questModel->getQuestIdByName($quest);

            if ($questId) {
                if ($timeReserved->isTimeReserved($time, $newDate, $questId)) {
                    return "Данное время занято";
                } else {
                    if ($this->Booking($time, $newDate, $questId)) {
                        $questTimes = new QuestsTimes();
                        return $this->renderPartial('//partials/_index_form', [
                            'questTimeModel' => $questTimes->getTimeOneLineForQuest('all', false),
                        ], true, true);
                    } else {
                        return "error during gathering page data";
                    }
                }
            } else return "error during find quest";
        } else  {
            return "r";
        }
    }

    public function actionUpdateMainTable()
    {
        $datePickerDate = date("Y-m-d", strtotime(Yii::$app->request->post('datePickerDate')));
        $questTimes = new QuestsTimes();
        return $this->renderPartial('//partials/_index_form',[
            'questTimeModel' => $questTimes->getTimeOneLineForQuest('all',$datePickerDate),
        ],true,true);
    }

    private function Booking($time,$date,$quest)
    {
        $reservingObject = new TimeReserved();
        return $reservingObject->bookQuest($time,$date,$quest);
    }

}

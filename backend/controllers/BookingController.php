<?php

namespace backend\controllers;

use backend\models\TimeReserved;

class BookingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $reservedTime = new TimeReserved();
        return $this->render('index',[
            'bookedRecords' => $reservedTime->returnBookedQuests()
        ]);
    }

}

<?php
namespace frontend\controllers;

use common\models\TimeReserved;
use frontend\models\QuestOwners;
use Yii;

class ProfileController extends \yii\web\Controller
{
    public function actionBookings()
    {
        $timeReservedObject = new TimeReserved();
        $questInfoModel = new QuestOwners();
        $bookedQuest = $timeReservedObject->getUserBookedQuests(\Yii::$app->user->id);
        $place_info = [];
        if ($bookedQuest) $place_info = $questInfoModel->find()->where("id=".$bookedQuest[0]['creator_id'])->asArray()->one();
        $partial = $this->renderPartial('//profile/bookings',[
            'bookedQuests' => $bookedQuest,
            'place_info' => $place_info
        ]);
        return $this->render('profile',[
            'partial' => $partial,
        ]);
    }

    public function actionSettings()
    {
        $partial = $this->renderPartial('//profile/settings');
        return $this->render('profile',[
            'partial' => $partial
        ]);
    }

    public function actionRemoveUserBooking()
    {
        $questInfoModel = new QuestOwners();
        $timeReserved = new TimeReserved();
        $place_info = [];
        $bookedQuest = $timeReserved->getUserBookedQuests(\Yii::$app->user->id);
        if ($bookedQuest) $place_info = $questInfoModel->find()->where("id=".$bookedQuest[0]['creator_id'])->asArray()->one();
        if ($timeReserved->removeBookedTime(Yii::$app->request->post('reserved'))) {
            return $this->renderPartial('//profile/bookings',[
                'bookedQuests' => $bookedQuest,
                'place_info' => $place_info
            ],true,true);
        } else {
            return false;
        }
    }

}

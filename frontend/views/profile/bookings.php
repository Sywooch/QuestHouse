<?php
/**
 * Created by PhpStorm.
 * User: akel
 * Date: 3/25/15
 * Time: 5:21 PM
 */
use yii\helpers\Url;
?>

<?php
?>
<ul class="booking-list booking-list-wishlist">
    <?php
        for ($i = 0; $i<count($bookedQuests);$i++){ ?>
            <li id ="<?=$bookedQuests[$i]['id']?>">
                <a class="booking-item" href="<?=Yii::$app->urlManager->createUrl('/quest?name='.$bookedQuests[$i]['quest_en_name'])?>">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="booking-item-img-wrap">
                                <img src="<?=Yii::$app->urlManager->createUrl('img/quest-images/').'/'.$bookedQuests[$i]['quest_id'].'/'.$bookedQuests[$i]['quest_picture'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="booking-item-title" style="color :#ffffff;"><?=$bookedQuests[$i]['quest_name']?></h5>
                            <h5 class="booking-item-title" style="color :#ffffff;"><?=$bookedQuests[$i]['date']?></h5>
                            <h5 class="booking-item-title" style="color :#ffffff;"><?=$bookedQuests[$i]['time_value']?></h5>
                            <h5 class="booking-item-title" style="color :#ffffff;"><?=$place_info['owner_address']?></h5>
                            <h5 class="booking-item-title" style="color :#ffffff;"><?=$place_info['owner_phone']?></h5>
                        </div>
                        <div class="col-md-3"><span class="booking-item-price" style="color: #ffffff;"><?=$bookedQuests[$i]['price']?> UAH</span>
                            <span class="btn btn-primary" id="removeBooking" style="background-color: #50779b;">Отменить</span>
                        </div>
                    </div>
                </a>
            </li>
    <?php }
    ?>


</ul>

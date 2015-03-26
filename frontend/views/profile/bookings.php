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
//print_r($bookedQuests);
//echo count($bookedQuests);
?>
<ul class="booking-list booking-list-wishlist">
    <?php
        for ($i = 0; $i<count($bookedQuests);$i++){ ?>
            <li id ="<?=$bookedQuests[$i]['id']?>">
                <a class="booking-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="booking-item-img-wrap">
                                <img src="img/quest-images/dublin_kill/0_b7628_412c4218_orig.jpg" />
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

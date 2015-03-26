<?php
use yii\helpers\Url;
use common\models\User;
?>

<div class="gap"></div>

<?php /*echo Yii::$app->user->getIdentity(true) */?>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="user-profile-sidebar" style="background: rgba(54, 25, 25, .2); margin: 1px;">
                        <div class="user-profile-avatar text-center">
                            <!--<img src="img/300x300.png"/>-->
                            <h5><?=User::getUserName(Yii::$app->user->id)['username']?></h5>
                        </div>
                        <ul class="list user-profile-nav">
                            <li><a href="<?=Url::toRoute('profile/bookings')?>"><i class="fa fa-user"></i>Брони</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-8" id="content_profile" style="background: rgba(54, 25, 25, .2); margin: 1px;">
                    <?=$partial?>
                </div>
            </div>

        </div>

        <div class="gap"></div>
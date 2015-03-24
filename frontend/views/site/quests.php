<?php
use yii\helpers\Url;
?>

<h1 style="text-align: center; color: #ffffff;">Наши квесты</h1>

<div style="width: 80%; margin: auto; background: rgba(54, 25, 25, .2); padding: 15px; color: #ffffff;">
    <div id="popup-gallery">
        <div class="row row-col-gap">


            <?php foreach($quest_model as $key): ?>
                <?php /*print_r($key)*/?>
                <div class="col-md-6">
                    <?php if ($key['quest_status']==1) $url = Yii::$app->urlManager->createUrl('/quest?name='.$key['quest_en_name']);
                            else $url = Yii::$app->urlManager->createUrl('/quests');
                        ?>
                    <a  href="<?=$url?>">

                        <img src="<?=Yii::$app->urlManager->createUrl('frontend/web/img/quest-images/').'/'.$key['quest_en_name'].'/'.$key['quest_picture'].'"' ?>" />
                        <!--<i class="fa fa-plus round box-icon-small hover-icon i round"></i>-->
                        <!--<div style="bottom: 5%; width: 30%; left: 5%; position: absolute; color: #ffffff;"><?/*=$key['quest_description']*/?></div>
                        <div style="bottom: 15%; right: 5%; position: absolute; color: #ffffff;"><?/*=$key['quest_logo']*/?></div>-->
                        <!--<div style="top: 10%; left: 10%; position: absolute;">
                            <img src="img/logo-white.png" alt="Image Alternative text" title="Gaviota en el Top" />
                        </div>-->
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<div class="gap-small"></div>
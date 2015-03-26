<?php
use yii\helpers\Url;
?>

<!--<h1 style="text-align: center; color: #ffffff;">Наши квесты</h1>

<div style="width: 80%; margin: auto; background: rgba(54, 25, 25, .2); padding: 15px; color: #ffffff;">
    <div id="popup-gallery">
        <div class="row row-col-gap">


            <?php /*foreach($quest_model as $key): */?>
                <div class="col-md-6">
                    <?php /*if ($key['quest_status']==1) $url = Yii::$app->urlManager->createUrl('/quest?name='.$key['quest_en_name']);
                            else $url = Yii::$app->urlManager->createUrl('/quests');
                        */?>
                    <a  href="<?/*=$url*/?>">

                        <img src="<?/*=Yii::$app->urlManager->createUrl('frontend/web/img/quest-images/').'/'.$key['quest_en_name'].'/'.$key['quest_picture'].'"' */?>" />
                    </a>
                </div>
            <?php /*endforeach */?>
        </div>
    </div>
</div>
<div class="gap-small"></div>-->


<h2 style="text-align: center; color: #ffffff;">Наши квесты</h2>

<!--<div class="container" style="background: rgba(54, 25, 25, .2);">-->
<div style="background: rgba(54, 25, 25, .2); margin: 1px;">
    <div id="popup-gallery" style="margin: 30px;">
        <div class="row row-col-gap">
            <?php foreach($quest_model as $key): ?>
            <div class="col-md-6">
                <?php if ($key['quest_status']==1) $url = Yii::$app->urlManager->createUrl('/quest?name='.$key['quest_en_name']);
                            else $url = Yii::$app->urlManager->createUrl('/quests');
                        ?>
                <a  href="<?=$url?>">

                    <img src="<?=Yii::$app->urlManager->createUrl('frontend/web/img/quest-images/').'/'.$key['quest_en_name'].'/'.$key['quest_picture'].'"' ?>" />
                </a>
            </div>
            <?php endforeach ?>
            </div>
        </div>

            <h2 style="text-align: center; color: #ffffff;">Расписание</h2>
            <div style="width: 220px; margin:auto;">
                <input class="date-pick form-control" id="quest-date" data-date-format="DD d MM yyyy" type="text" />
            </div>

            <div class="gap"></div>
            <div id="booking-table">
                <?=$partial?>
            </div>

</div>
<div class="gap"></div>
<?php
use yii\helpers\Html;
use yii\helpers\Url;
/*use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;*/
?>

<?php
    //print_r(Yii::$app->params['nav_array']);
?>

<?php
/*print_r(Yii::$app->params['nav_array']);
*/?>
<div class="nav">
    <ul class="slimmenu" id="slimmenu">
    <?php foreach(Yii::$app->params['nav_array'] as $key=>$value): ?>
        <!--<tr>
            <td><?php /*print_r(Yii::$app->params['nav_array'][$key]['menu_title']); */?></td>
        </tr>-->

            <li <?php if (Yii::$app->requestedRoute==Yii::$app->params['nav_array'][$key]['menu_link']) echo "class='active'" ?> ><?php echo Html::a(Yii::$app->params['nav_array'][$key]['menu_title'],array(Yii::$app->params['nav_array'][$key]['menu_link'])); ?>

                <?php
                    //print_r(Yii::$app->params['quests_direct_link'][1]);
                    if (count(Yii::$app->params['quests_direct_link'][$key])>0){ ?>
                        <ul>

                            <?php for ($i=0;$i<count(Yii::$app->params['quests_direct_link'][$key]);$i++): ?>

                                <li><a href="<?=Url::to(['quest','name'=>Yii::$app->params['quests_direct_link'][$key][$i]['quest_en_name']]);?>">
                                        <?=Yii::$app->params['quests_direct_link'][$key][$i]['quest_name']; ?>
                                    </a>
                                </li>

                            <?php endfor; ?>

                        </ul>
                    <?php }
                ?>
            <!--<ul>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
            </ul>-->

            </li>

    <?php endforeach; ?>
    </ul>
</div>


<!--<div class="nav">
    <ul class="slimmenu" id="slimmenu">
        <li class="active"><li><?php /*echo Html::a('Main Page',array('/site/index')); */?>
        </li>
        <li><li><?php /*echo Html::a('Game Space',array('/site/gamespace')); */?>
            <ul>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
                <li><a href="success-payment.html">Success Payment</a>
                </li>
            </ul>

        </li>
        <li><li><?php /*echo Html::a('Quests',array('/site/about')); */?>
            <ul>
                <li><?php /*echo Html::a('Квест',array('/site/quest',array('id' => "dublin_kill"))); */?>
                </li>
                <li><a href="hotel-details.html">Квест 2</a>
                </li>
                <li><a href="hotel-details.html">Квест 3</a>
                </li>
                <li><a href="hotel-details.html">Квест 4</a>
                </li>
            </ul>
        </li>
        <li><?php /*echo Html::a('Our Games',array('/site/games')); */?>
        <li><?php /*echo Html::a('About Us',array('/site/about')); */?>

    </ul>
</div>
-->
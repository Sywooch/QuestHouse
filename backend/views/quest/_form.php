<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Quest */
/* @var $form yii\widgets\ActiveForm */
?>
<!--<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>-->
<!--
    <form id="Imgfrm">
        <input id="imgfile" type="file" onchange="readURL(this)"; />
        <img id="preview" src="#" alt="your image" />
    </form>
-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $("#quest-imgfile" ).change(function() {
        alert( "Handler for .change() called." );
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
                $( "#images_list" ).empty();
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[i]);
                    reader.onload = function (e) {
                                $('#images_list').prepend('<img id="theImg" style = "width : 200px; padding : 15px;" src="'+e.target.result+'" />');
                    };
                    reader = undefined;
                }

        /*var reader = new FileReader();
        reader.onload = function (e) {
        document.getElementById('preview').src=e.target.result;
        }
        reader.readAsDataURL(input.files[0]);*/

        }
    }
</script>
<!--<div class="quest-form">

    <?php /*$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); */?>

    <?/*= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32]) */?>

    <?/*= $form->field($model, 'quest_name')->textInput(['maxlength' => 32]) */?>

    <?/*= $form->field($model, 'quest_description')->textarea(['rows' => 6]) */?>

    <?/*= $form->field($model, 'quest_price')->textInput() */?>

    <?/*= $form->field($model, 'quest_max_players')->textInput() */?>

    <?/*= $form->field($model, 'quest_logo[]')->fileInput(['multiple' => true]) */?>

    <div class="form-group">
        <?/*= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) */?>
    </div>

    <?php /*ActiveForm::end(); */?>

</div>-->






<div class="row">
    <div class="col-md-12 col-xs-12">
        <div id="fuelux-wizard" class="wizard row">
            <ul class="wizard-steps">
                <li data-target="#step1" class="active">
                    <span class="step">1</span>
                    <span class="title">General <br> information</span>
                </li>
                <li data-target="#step2">
                    <span class="step">2</span>
                    <span class="title">Address <br> information</span>
                </li>
                <li data-target="#step3">
                    <span class="step">3</span>
                    <span class="title">User <br> settings</span>
                </li>
                <li data-target="#step4">
                    <span class="step">4</span>
                    <span class="title">Payment <br> info</span>
                </li>
            </ul>
        </div>
        <div class="step-content">
            <div class="step-pane active" id="step1">
                <div class="row form-wrapper">
                    <div class="col-md-8 col-md-offset-2">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                        <?= $form->field($model, 'quest_en_name')->textInput(['maxlength' => 32]) ?>

                        <?= $form->field($model, 'quest_name')->textInput(['maxlength' => 32]) ?>

                        <?= $form->field($model, 'quest_price')->textInput() ?>

                        <?= $form->field($model, 'quest_max_players')->textInput() ?>

                        <?= $form->field(new \common\models\QuestsTimes(), 'time_value')->textInput() ?>

                        <?= $form->field($model, 'quest_description')->textarea(['rows' => 6]) ?>

                        <!--<form>
                            <div class="field-box">
                                <label>Name:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box has-error">
                                <label>Company:</label>
                                <input class="form-control" type="text" />
                                <span class="alert-msg"><i class="icon-remove-sign"></i> Please enter your company</span>
                            </div>
                            <div class="field-box has-warning">
                                <label>Email:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box has-success">
                                <label>Username:</label>
                                <input class="form-control" type="text" />
                                <span class="alert-msg"><i class="icon-ok-sign"></i> Username available</span>
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
            <div class="step-pane" id="step2">
                <div class="row form-wrapper">
                    <div class="col-md-8 col-md-offset-2">

                        <?= $form->field($model, 'quest_logo[]')->fileInput(['multiple' => true,'onchange'=>"readURL(this);"])?>
                        <div id="images_list">

                        </div>

                        <div class="form-group">
                            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                        <!--<form>
                            <div class="field-box">
                                <label>Address:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>City:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Postal/ZIP code:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Country:</label>
                                <input class="form-control" type="text" />
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
            <div class="step-pane" id="step3">
               <!-- <div class="row form-wrapper">
                    <div class="col-md-8 col-md-offset-2">
                        <form>
                            <div class="field-box">
                                <label>Username:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Photo:</label>
                                <input type="file" />
                            </div>
                            <div class="field-box">
                                <label>App name:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Time zone:</label>
                                <select class="select2" style="width: 60%;">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option><option value="" disabled="disabled">-------------</option>
                                    <option value="American Samoa">(GMT-11:00) American Samoa</option>
                                    <option value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                    <option value="Midway Island">(GMT-11:00) Midway Island</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>-->
            </div>
            <div class="step-pane" id="step4">
<!--                <div class="row form-wrapper payment-info">
                    <div class="col-md-8 col-md-offset-2">
                        <form>
                            <div class="field-box">
                                <label>Subscription Plan:</label>
                                <select class="select2" id="plan">
                                    <option value="66">Basic - $2.99/month (USD)</option>
                                    <option value="67">Pro - $9.99/month (USD)</option>
                                    <option value="68">Premium - $49.99/month (USD)</option>
                                </select>
                            </div>
                            <div class="field-box">
                                <label>Credit Card Number:</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Expiration:</label>
                                <input class="form-control" style="width:60px;display:inline" placeholder="MM" type="text" />
                                &nbsp; / &nbsp;
                                <input class="form-control" style="width:85px;display:inline" placeholder="YYYY" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Card CVC Number:</label>
                                <input class="form-control" type="text" />
                            </div>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="wizard-actions">
            <button type="button" disabled class="btn btn-primary btn-prev">
                <i class="fs-chevron-left"></i> Prev
            </button>
            <button type="button" class="btn btn-primary btn-next" data-last="Finish">
                Next <i class="fs-chevron-right"></i>
            </button>
            <button type="button" class="btn btn-success btn-finish">
                <i class="fs-checkmark"></i> Setup your account!
            </button>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function(){
        App.init();
        FormWizard.init();
    });
</script>
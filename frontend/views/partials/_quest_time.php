<div style="width: 99%;">

    <style>
        .news-list-container {
            overflow-x: auto;
            overflow-y: hidden;
        }

        .timeContainer {
            cursor: pointer;
        }

        #container {
            /*height: 187px;*/
            height: 60px;
            min-width: 1176px;

            /*width: auto;*/
        }

        .news-list-item {
            /*border: 1px solid #E5E5E5;*/
            float: left;
            /*height: 175px;*/
            color: white;
            padding: 5px;
            /*width: 184px;*/
        }
    </style>

    <div id="tableholder" style="width: auto; margin-left: 15px;">
        <div id="sidebar" style="float: left; height: auto; width: 100px;">

            <?php foreach ($questTimeModel as $key=>$item): ?>
                <div style="color: #ffffff; height: 60px; display: block; position: relative;">
                    <div style="margin-top: 10px;"><?=$key?></div>
                </div>
            <?php endforeach; ?>

        </div>


        <?php
        echo '<div class="news-list-container">';

        foreach ($questTimeModel as $key=>$item):
            echo '<div id=container class="quest_booking" name='.$model['id'].' >';

            usort($item, function ($item1, $item2) {
                return number_format((float)$item1['time_value']) -number_format((float) $item2['time_value']);
            });



            for ($j = 0; $j < count($item); $j++): ?>

                <div style="border-radius: 8px; width: 7%; float: left; background: rgba(180, 160, 180, .6); margin-left: 15px;" id='<?=array_values($item)[$j]['id'] ?>' style='padding-top:0; padding-bottom: 0; height: 60px;'>
                    <?php if (array_values($item)[$j]['id']){
                        ?>
                        <div style="width: 50px; height: 44px; color: #ffffff; margin: auto;">
                            <p style="padding: 0; color: #000000; size: 12px; text-align: center;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                        </div>
                    <?php
                    } else {

                        ?>
                        <div class="timeContainer">
                            <p id="time-value" style="padding: 0; color: #ffffff; text-align: center; margin: 0;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                            <div id="quest-price" style="width: 50px; color: #ffffff; font-size: 12px; margin: auto;">
                                <?=array_values($item)[$j]['price']?> UAH
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            endfor;
            echo "</div>";
        endforeach;
        ?>
    </div>

</div>
</div>





<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal1
</button>-->

<!-- Modal -->
<div class="modal fade" id="login-register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="row row-wrap" data-gutter="60">
                    <div class="col-md-12">
                        <h4>Tabs</h4>
                        <div class="tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab">Авторизация</a>
                                </li>
                                <li><a href="#tab-2" data-toggle="tab">Регистрация</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">

                                    <form id = "modal-login-form">
                                        <input style="display:none">
                                        <input type="password" style="display:none">
                                        <div class="form-group form-group-lg">
                                            <label>Login</label>
                                            <input name="username" class="form-control" type="text" placeholder="Enter email" />
                                        </div>

                                        <div id="login-fail" class="form-group form-group-lg">
                                            <label>Password</label>
                                            <input name="password" class="form-control" type="password" placeholder="Password" />
                                        </div>

                                        <!--<div id="login-fail" class="alert alert-danger" style="margin-top: 15px; visibility: hidden;">
                                            <p class="text-small">Неверный логин или пароль</p>
                                        </div>

                                        <div id="login-success" class="alert alert-success" style="margin-top: 15px;">
                                            <p class="text-small">Успешная авторизация</p>
                                        </div>-->
                                        <input class="btn btn-primary" type="submit" value="Log In" />
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="tab-2">

                                    <form id = "modal-register-form">
                                        <input style="display:none">
                                        <input type="password" style="display:none">
                                        <div class="form-group form-group-lg">
                                            <label>Имя пользователя</label>
                                            <input name="username" class="form-control" type="text" placeholder="Enter login" />
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" placeholder="Email" />
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label>Password Repeat</label>
                                            <input name="password" class="form-control" type="password" placeholder="Password" />
                                        </div>

                                        <input class="btn btn-primary" type="submit" value="Register" />
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Бронирование</h4>
            </div>
            <div class="modal-body">




                <div class="row">

                    <div class="col-md-10 col-md-offset-1">

                        <!--<i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>-->

                        <!--<h2 class="text-center">John, your payment was successful!</h2>

                        <h5 class="text-center mb30">Booking details has been send to johndoe@gmail.com</h5>-->

                        <ul class="order-payment-list list mb30">
                            <li>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h5 id ="b-quest-name"></h5>
                                        <p id ="b-date"></p>
                                        <p id ="b-time"></p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p class="text-right"><span id="b-price" class="text-lg"></span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="confirm-booking" class="btn btn-default">Забронировать</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>


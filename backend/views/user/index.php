<?php
/* @var $this yii\web\View */
?>



<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Users
                </div>
            </div>
            <div class="widget-body">
                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                    <tr>

                        <th style="width:15%">
                            user names
                        </th>
                        <th style="width:45%" class="hidden-phone">
                            emails
                        </th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    for ($i=0;$i<count($users);$i++):
                    ?>

                    <tr>
                        <td>
                            <?=$users[$i]['username']?>
                        </td>
                        <td class="hidden-phone">
                            <?=$users[$i]['email']?>
                        </td>
                    </tr>
                    <?php
                    endfor;
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
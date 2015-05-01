<?php
/* @var $this yii\web\View */
?>

<?php
print_r($bookedRecords);
?>
<div class="row-fluid">
    <div class="span12">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Dynamic Table
                </div>
            </div>
            <div class="widget-body">
                <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                        <thead>
                        <tr>
                            <th style="width:20%">Quest</th>
                            <th style="width:35%">Date</th>
                            <th style="width:15%" class="hidden-phone">Time</th>
                            <th style="width:15%" class="hidden-phone">User</th>
                            <th style="width:15%" class="hidden-phone">Phone</th>
                            <!--<th style="width:15%" class="hidden-phone">Actions</th>-->
                        </tr>
                        </thead>
                        <tbody>

                        <?php for ($i=0;$i<count($bookedRecords);$i++): ?>

                        <tr class="gradeA">
                            <td><?=$bookedRecords[$i]['quest_name']?></td>
                            <td><?=$bookedRecords[$i]['date']?></td>
                            <td><?=$bookedRecords[$i]['time_value']?></td>
                            <td><?=$bookedRecords[$i]['username']?></td>
                            <td><?=$bookedRecords[$i]['phone']?></td>
                            <!--<td class="hidden-phone">
                                <a href="#" class="btn btn-success btn-small hidden-phone" data-original-title="">email</a>
                                <a href="#accSettings2" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                                    edit
                                </a>
                                <div id="accSettings2" class="modal hide fade" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                        <h4 id="myModalLabel2">
                                            Edit client details
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input type="text" class="span12" placeholder="Frist name">
                                            </div>
                                            <div class="span4">
                                                <input type="text" class="span12" placeholder="Last name">
                                            </div>
                                            <div class="span4">
                                                <input type="text" class="span12" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input type="text" class="span12" placeholder="Contact">
                                            </div>
                                            <div class="span8">
                                                <input type="text" class="span12" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">
                                            Close
                                        </button>
                                        <button class="btn btn-primary">
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </td>-->
                        </tr>

                        <?php endfor; ?>


                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>



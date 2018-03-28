<?php

/* @var $this yii\web\View */
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;
//use kartik\widgets\ActiveForm;
//use kartik\widgets\TimePicker;

$this->title = 'EMS';
?>

<div class="site-index">
  <form id="minister">
    <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Shikhar Bhatt</a>
                      <span class="users-list-date">Today</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                    <li>
                      <img src="photos/shikhar.jpg" alt="User Image" style="border-radius:50%;max-width:50%;max-height:20%;">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                      <input type="checkbox" name="minister1" value="minister1">
                    </li>
                  </ul>
                  <div class="form-group">
                <label>Date:</label>
                <?= DatePicker::widget([
                      'name' => 'date',
                      'id' => 'date',
                      'value' => date("Y-m-d"),
                      //'minDate' => '0',
                      //'datesDisabled' => date("Y-m-d"),
                      'template' => '{addon}{input}',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-mm-dd'
                          ]
                      ]);?>

               <br><label>Start Time</label>
               <?=TimePicker::widget([
                  'id' => 'start_time',
                	'name' => 'start_time',
                	'pluginOptions' => [
                		'showSeconds' => false
                	]
                ]);?>

                <br><label>End Time</label>
                <?=TimePicker::widget([
                  'id' => 'end_time',
                 	'name' => 'end_time',
                 	'pluginOptions' => [
                 		'showSeconds' => false
                 	]
                 ]);?>
                <!-- /.input group -->
              </div>

                   <input type="date" class="btn btn-sm btn-info btn-flat" style="width:20%">
                   <input type="time" class="btn btn-sm btn-info btn-flat" style="width:20%">

                  <!-- /.users-list -->
                </div>
                <br>
                   <!-- <button class="btn btn-sm btn-info btn-flat ">Submit</button> -->
<button type="button" class="btn btn-block btn-success btn-lg" style="width:30%; align:center;" data-toggle="modal" data-target="#modal-default">
                Submit
              </button>

  </form>

<!-- <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Modal Examples</h3>
            </div>
            <div class="box-body">

            </div>
          </div>
        </div>
      </div> -->

      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</div>

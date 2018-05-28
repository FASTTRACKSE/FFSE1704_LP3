<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calendar Display</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
</head>
<body>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
          <h1>Calendar</h1>

          <div id='calendar'>
           <!--  <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Chi tiết sự kiện</h4>
                </div>
                <div class="modal-body">
                  <?php echo form_open(site_url("calendar/get_events"), array("class" => "form-horizontal")) ?>
                  <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Sự kiện</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="name" value="" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Thời gian bắt đầu</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Ngày diễn ra</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="start_date" id="start_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Ngày kết thúc</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                </div>
                <input type="hidden" name="eventid" id="event_id" value="0" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <?php echo form_close() ?> -->
            </div> 
        </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
           $('#calendar').fullCalendar({
                eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>calendar/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ]
           });
       });
   </script>
</body>
</html>
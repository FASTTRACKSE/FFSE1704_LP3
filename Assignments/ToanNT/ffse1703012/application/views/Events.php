<?php
require_once "templates/index-header.php";
?>
<link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
<h1 style="text-align: center;">Sự kiện tại Đà Nẵng</h1><br>

<div class="container">
 <li style="list-style-type:none"> <a href="https://danangfantasticity.com/lich-su-kien"><i class="fa fa-calendar" aria-hidden="true"></i> Lịch sự kiện</a></li>
 <li style="list-style-type:none">
   <a href="https://danangfantasticity.com/lich-su-kien"><i class="glyphicon glyphicon-th-list
    " aria-hidden="true"></i> Sự kiện nổi bật</a>
  </li>

  <div class="row">
      <div class="col-md-4" style="height: 200px">
      <!--  đây là vùng để hiển thị danh sách các sự kiện nổi bật  -->
      <h1>Calendar</h1>

          <div id='calendar'>
            <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Chi tiết sự kiện</h4>
                </div>
                <div class="modal-body">
                  <?php echo form_open(site_url("sukien/get_events"), array("class" => "form-horizontal")) ?>
                  <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Sự kiện</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" name="name" value="" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Thông tin sự kiện</label>
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
                <button type="button"><a href="<?php echo base_url();?>index.php/sukien/test"  style="text-decoration:none;">Tìm hiểu</a></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        var date_last_clicked = null;

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next,today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listYear'
            }, displayEventTime: false,
            eventSources: [
            {

               events: function(start, end, timezone, callback) {
                $.ajax({
                    url: '<?php echo base_url();?>index.php/sukien/get_events',
                    dataType: 'json',
                    data: {
                        start: start.unix(),
                        end: end.unix()
                    },
                    success: function(msg) {
                        var events = msg.events;
                        callback(events);
                    }
                });
            }
        }
        ],
        dayClick: function(date, jsEvent, view) {
            date_last_clicked = $(this);
            $(this).css('background-color', '#bed7f3');
            $('#showModal').modal();
        },
        eventClick: function(event, jsEvent, view) {
          $('#name').val(event.title);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('YYYY/MM/DD'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD'));
        } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD'));
        }
        $('#event_id').val(event.id);
        $('#showModal').modal();
    },
});
    });
</script>
</div>
</div>
      <div class="col-md-4">
      <h2>Sự kiện nổi bật</h2>
      <?php foreach ($list as $value) {?>
      <li class="post-item  tie-standard " style="list-style-type:none"> <a href="https://danangfantasticity.com/su-kien-noi-bat/diff-2018-doi-da-nang-viet-nam-cung-bac-cam-xuc-tinh-yeu.html" title="<?php echo $value['title']; ?>" class="post-thumb">
        <div class="row">
        <div class="post-thumb-overlay-wrap">
          <div class="post-thumb-overlay"> <span class="icon"></span>
          </div>
        </div> 
        <img src="<?=base_url()?>upload/<?= $value['hinh_anh']; ?>" width="100px" height="100px" ></a>
        <h5 class="post-title">
          <a href="https://danangfantasticity.com/su-kien-noi-bat/diff-2018-doi-da-nang-viet-nam-cung-bac-cam-xuc-tinh-yeu.html" title=""><?php echo $value['title']; ?></a>
        </h5>
        <div class="post-details">

          <!-- <div class="post-meta"><span class="date meta-item"><span class="fa fa-clock-o" aria-hidden="true"></span> <span>6 ngày trước</span></span>
            <div class="clearfix"></div>
      </div> -->
       </div>
      </div>
    </li>
      <?php } ?>
    </div>
    
    <div class="col-md-4">
      <h2>Sự kiện sắp diễn ra</h2>
      <?php foreach ($event as $value) {?>
      
      <li class="post-item  tie-standard " style="list-style-type:none"> <a href="https://danangfantasticity.com/su-kien-noi-bat/diff-2018-doi-da-nang-viet-nam-cung-bac-cam-xuc-tinh-yeu.html" title="<?php echo $value['title']; ?>" class="post-thumb">
        <div class="row">
        <div class="post-thumb-overlay-wrap">
          <div class="post-thumb-overlay"> <span class="icon"></span>
          </div>
        </div> 
        <img src="<?=base_url()?>upload/<?= $value['hinh_anh']; ?>" width="100px" height="100px" ></a>
        <h5 class="post-title">
          <a href="https://danangfantasticity.com/su-kien-noi-bat/diff-2018-doi-da-nang-viet-nam-cung-bac-cam-xuc-tinh-yeu.html" title=""><?php echo $value['title']; ?></a>
        </h5>
        <div class="post-details">

         <!--  <div class="post-meta"><span class="date meta-item"><span class="fa fa-clock-o" aria-hidden="true"></span> <span>6 ngày trước</span></span>
            <div class="clearfix"></div>
      </div> -->
       </div>
      </div>
    </li>
   
    <?php } ?>
  </div>
</div>


<hr>

</div>
<?php
require_once "templates/index-footer.php";
?>
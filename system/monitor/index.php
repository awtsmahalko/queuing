<?php
include '../core/config.php';
$teller_id = $_REQUEST['q'];
$curr_data = FM_SELECT_QUERY("que_no,que_type","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
if($curr_data[0]>0){
  $my_que = $curr_data[1]."-".sprintf("%04d",$curr_data[0]);
}else{
  $my_que = "------";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CENECO QUEUING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function startTime() {
      get_waiting_list();
      var today = new Date();

      var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

      var month_ = months[today.getMonth()];
      var date_ = today.getDate();
      var year_ = today.getFullYear();

      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);

      var hour_ = h - (h >= 12 ? 12 : 0);
      var period = h >= 12 ? 'PM' : 'AM';
      document.getElementById('date-txt').innerHTML = month_ + " " + date_ + ", " +year_;
      document.getElementById('time-txt').innerHTML = hour_ + ":" + m + " " +period;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
  </script>
</head>
<body onload="startTime()" onkeypress="key_press_event(event)">
  <div class="well text-center">
    <h1>CENECO QUEUING SYSTEM</h1>
    <h3><span id="date-txt"></span> <span id="time-txt"></span></h3> 
  </div>
  <div class="container" style="padding: unset;">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h1>Teller 1</h1>
          </div>
          <div class="panel-body text-center">
            <span style="font-size: 200px" id='counter-que'><?=$my_que?></span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">Waiting list.... </div>
          <div class="panel-body">
            <ul class="list-group" id='waiting-list' style='max-height:300px;overflow:auto;'>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  var teller_id = <?=$teller_id?>;
  function fetch_current_monitor(){
    $.post("../ajax/monitor_get_current_que_board.php",{
      teller_id : teller_id
    },function(data,status){
      $("#counter-que").html(data);
    });
  }
  function get_waiting_list(){
    fetch_current_monitor();
    $.post("../ajax/teller_get_waiting.php",{
    },function(data,status){
      $("#waiting-list").html(data);
    });
  }
</script>
</html>

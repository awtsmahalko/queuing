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
<body onload="startTime()">
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
            <span style="font-size: 200px">R-0999</span>
          </div>
          <div class="panel-footer text-center">
            <button type="button" class="btn btn-lg btn-danger"> RECALL QUE</button>
            <button type="button" class="btn btn-lg btn-primary"> <span class="fa fa-arrow-right"></span> NEXT QUE</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">Waiting list.... </div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">0001</li>
              <li class="list-group-item">0002</li>
              <li class="list-group-item">0003</li>
              <li class="list-group-item">0002</li>
              <li class="list-group-item">0003</li>
              <li class="list-group-item">0002</li>
              <li class="list-group-item">0003</li>
              <li class="list-group-item">0002</li>
              <li class="list-group-item">0003</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include '../core/config.php';
$teller_id = $_SESSION['que']['teller_id'];
if(isset($teller_id)){
  $array_type = array('P' => 'PWD/SENIOR CITIZEN/PREGNANT','R' => 'REGULAR');
  $body_text = "onkeypress='key_press_event(event)'";
  $teller_data = FM_SELECT_QUERY("teller_name","tbl_teller","teller_id = '$teller_id'");
  $teller_name = $teller_data[0];

  $curr_data = FM_SELECT_QUERY("que_no,que_type,kind","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
  if($curr_data[0]>0){
    $my_que = "<h1 style='margin:auto;'>".$array_type[$curr_data['que_type']]."</h1><span style='font-size:200px'>".sprintf("%04d",$curr_data[0])."</span><h2 style='margin:auto;'>(".$my_kind_arr[$curr_data[kind]].")</h2>";
  }else{
    $my_que = "<span style='font-size:200px'>------</span>";
  }
}else{
  $body_text = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MULTI TRANSACTIONS QUEUING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function startTime() {
    <?php if(isset($teller_id)){ ?>get_waiting_list(); <?php } ?>
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
<body onload='startTime()' <?=$body_text?> >
  <div class="well text-center" style='background-color:#049408;color:#fff;'>
    <h3 style="margin: auto;">MULTI TRANSACTION QUEUING SYSTEM</h3>
    <h4 style="margin: auto;"><span id="date-txt"></span> <span id="time-txt"></span></h4>
  </div>
  <div class="container" style="padding: unset;width:100%;">
    <?php if(isset($teller_id)){?>
      <div class="col-md-12">
        <div class="col-md-8">
          <div class="panel panel-default" style='border-color:#049408;'>
            <div class="panel-heading text-center"  style='background-color:#049408;color:#fff;'>
              <h1 style='margin:auto;'><?=$teller_name?></h1>
            </div>
            <div class="panel-body text-center" style='min-height: 215px;overflow: auto;'>
              <span style="color:#049408;" id='counter-que'><?=$my_que?></span>
            </div>
            <div class="panel-footer text-center">
              <button type="button" class="btn btn-lg btn-danger" onclick="recallQue()"><span class='fa fa-microphone'></span> RECALL QUE ( R )</button>
              <button type="button" class="btn btn-lg btn-primary" onclick='next_que()'> <span class="fa fa-arrow-right"></span> NEXT QUE ( N )</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default" style='border-color:#049408;'>
            <div class="panel-heading" style='background-color:#049408;color:#fff;'><span class='fa fa-gears'></span> Account Details</div>
            <div class="panel-body">
                <div class="input-group" style='margin-bottom:2px;'>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" id="username" placeholder="Username" value='<?=$_SESSION['que']['username']?>'>
                </div>
                <div class="input-group" style='margin-bottom:2px;'>
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="password" class="form-control" id="curr-password" placeholder="Current Password">
                </div>
                <div class="input-group" style='margin-bottom:2px;'>
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="password" class="form-control" id="password" placeholder="New Password">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="password" class="form-control" id="password-repeat" placeholder="Repeat New Password">
                </div>
            </div>
            <div class="panel-footer text-center">
              <button type="button" class="btn btn-sm btn-primary" onclick='updateAccount()'>
                <span class='fa fa-edit'></span> UPDATE ACCOUNT DETAILS
              </button>
              <button type="button" class="btn btn-sm btn-danger" onclick='logOut()'>
                <span class='fa fa-sign-out'></span> LOGOUT
              </button>
            </div>
          </div>
          <div class="panel panel-default" style='border-color:#049408;'>
            <div class="panel-heading" style='background-color:#049408;color:#fff;'><span class='fa fa-refresh'></span> Waiting list.... </div>
            <div class="panel-body">
              <ul class="list-group" id='waiting-list' style='min-height:150px;max-height:150px;overflow:auto;color:#049408;'>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php }else{ $teller_id = 0; ?>
      <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form id='login-page' method='POST'>
            <div class="panel panel-default" style='border-color:#049408;'>
              <div class="panel-heading text-center"  style='background-color:#049408;color:#fff;'>
                <h2 style='margin:auto;'>LOG IN PAGE</h2>
              </div>
              <div class="panel-body text-center">
                <div class="input-group" style='margin-bottom:5px;'>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="input-group" style='margin-bottom:5px;'>
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <span style='color:red;' id='response'></span>
              </div>
              <div class="panel-footer text-center">
                <button type="submit" class="btn btn-primary" id="btn_login">
                  <i class='glyphicon glyphicon-share'></i> LOGIN
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php } ?>
  </div>
</body>
<script type="text/javascript">
var teller_id = <?=$teller_id?>;
var ltseale_rps = "<?=$_SESSION['que']['password']?>";
  $('#login-page').submit(function(e){
    $("#btn_login").prop("disabled",true);
    $("#btn_login").html("<span class='fa fa-spin fa-spinner'></span> Loading...");

    e.preventDefault();
    $.ajax({
      type:"POST",
      url:"../ajax/teller_login.php",
      data:$('#login-page').serialize(),
      success:function(data){
        if(data == 1){
          location.reload();
        }else{
          $("#response").html("<i class='glyphicon glyphicon-info-sign'></i> Oops Incorrect username or password!");
        }
        $("#btn_login").prop("disabled",false);
        $("#btn_login").html("<i class='glyphicon glyphicon-share'></i> LOGIN");
      }
    });
  });
  function next_que(){
    $.post("../ajax/teller_finish_que.php",{
      teller_id:teller_id
    },function(data,status){
      get_waiting_list();
      $("#counter-que").html(data);
      if(data == -1){
        $("#counter-que").html("<span style='font-size:200px'>------</span>");
        alert("No que found");
      }
    });
  }
  function get_waiting_list(){
    $.post("../ajax/teller_get_waiting.php",{
    },function(data,status){
      $("#waiting-list").html(data);
    });
  }
  function key_press_event(event) {
    var key_press = event.which || event.keyCode;
    if(key_press == 78 || key_press == 110){
      next_que();
    }
    if(key_press == 82 || key_press == 114){
      recallQue();
    }
   //  alert("The Unicode value is: " + key_press);
  }
  function linkMe(q){
    window.location = "index.php?q="+q;
  }
  function recallQue(){
    $.post("../ajax/teller_recall_que.php",{
      teller_id:teller_id
    },function(data,status){
    });
  }
  function logOut(){
    var conf = confirm("Are you sure to logout?");
    if(conf == true){
      $.post("../ajax/teller_logout.php",{
      },function(data,status){
        location.reload();
      });
    }
  }

  function logOut_(){
    $.post("../ajax/teller_logout.php",{
    },function(data,status){
      location.reload();
    });
  }

  function updateAccount(){
    var username = $("#username").val();
    var curr_pass = $("#curr-password").val();
    var password = $("#password").val();
    var password_repeat = $("#password-repeat").val();

    if(username == ''){
      alert("Please input username");
    }else if(curr_pass != ltseale_rps){
      alert("Current Password is incorrect");
    }else if(password == ''){
      alert("New Password is required");
    }else if(password != password_repeat){
      alert("New Password does not match");
    }else{
      $.post("../ajax/teller_update_account.php",{
        teller_id:teller_id,
        password:password,
        username:username
      },function(data,status){
        if(data == 2){
          alert("Account username already exist!");
        }else if(data == 1){
          alert("Account successfully updated!\nYou have to login again for security");
          logOut_();
        }else{
          alert("Error occur!");
        }
        location.reload();
      });
    }
  }
</script>
</html>
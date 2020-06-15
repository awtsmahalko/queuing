<?php
include '../core/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$teller_ = FM_SELECT_QUERY("*","tbl_teller","username = '$username' AND password = '$password'");
if($teller_[0] > 0){
	if($teller_[teller_status] == 1){
	    $_SESSION['que']['teller_id'] = $teller_[teller_id];
	    $_SESSION['que']['teller_name'] = $teller_[teller_name];
	    $_SESSION['que']['username'] = $teller_[username];
	    $_SESSION['que']['password'] = $_POST['password'];
    	echo 1;
	}else{
		echo -1;
	}
}else{
    echo 0;
}

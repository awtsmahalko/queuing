<?php
include '../core/config.php';

$teller_id = $_POST['teller_id'];
$password = md5($_POST['password']);
$username = $_POST['username'];

$check_exist_ = FM_SELECT_QUERY("COUNT(*)","tbl_teller","username = '$username' AND teller_id != '$teller_id'");

if($check_exist_[0] > 0){
    echo 2;
}else{
    $form_ = array(
        'username' => $username,
        'password' => $password
    );
    echo FM_UPDATE_QUERY("tbl_teller",$form_,"teller_id = '$teller_id'");
}
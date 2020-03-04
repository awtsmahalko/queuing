<?php
include '../core/config.php';

$teller_name = clean($_POST['teller_name']);
$username = clean($_POST['username']);
$password = md5($_POST['password']);

$is_exist_teller = FM_SELECT_QUERY("COUNT(*)","tbl_teller","teller_name = '$teller_name'");
$is_exist_username = FM_SELECT_QUERY("COUNT(*)","tbl_teller","username = '$username'");
if($is_exist_teller[0]>0){
    echo -1;
}else if($is_exist_username[0]>0){
    echo -2;
}else{
    $form = array(
    	'teller_name' => $teller_name,
    	'username' => $username,
    	'password' => $password,
    	'teller_status' => 1
    );
    $is_insert = FM_INSERT_QUERY("tbl_teller",$form);
    echo ($is_insert)?1:0;
}
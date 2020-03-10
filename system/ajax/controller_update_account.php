<?php
include '../core/config.php';

$admin_id = $_SESSION['que']['admin_id'];
$password = md5($_POST['password']);
$username = clean($_POST['username']);
$admin_name = clean($_POST['admin_name']);

$check_exist_ = FM_SELECT_QUERY("COUNT(*)","tbl_admin","username = '$username' AND admin_id != '$admin_id'");

if($check_exist_[0] > 0){
    echo 2;
}else{
    $form_ = array(
        'admin_name' => $admin_name,
        'username' => $username,
        'password' => $password
    );
    echo FM_UPDATE_QUERY("tbl_admin",$form_,"admin_id = '$admin_id'");
}
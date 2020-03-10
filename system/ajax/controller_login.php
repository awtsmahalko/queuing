<?php
include '../core/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$admin_ = FM_SELECT_QUERY("*","tbl_admin","username = '$username' AND password = '$password'");
if($admin_[0] > 0){
    $_SESSION['que']['admin_id'] = $admin_[admin_id];
    $_SESSION['que']['admin_name'] = $admin_[admin_name];
    $_SESSION['que']['admin_username'] = $admin_[username];
    $_SESSION['que']['admin_password'] = $_POST['password'];
    echo 1;
}else{
    echo 0;
}

<?php
include '../core/config.php';

$admin_name = clean($_POST['admin_name']);
$username = clean($_POST['username']);
$password = md5($_POST['password']);

$is_exist_name = FM_SELECT_QUERY("COUNT(*)","tbl_admin","admin_name = '$admin_name'");
$is_exist_username = FM_SELECT_QUERY("COUNT(*)","tbl_admin","username = '$username'");
if($is_exist_name[0]>0){
    echo -1;
}else if($is_exist_username[0]>0){
    echo -2;
}else{
    $form = array(
    	'admin_name' => $admin_name,
    	'username' => $username,
    	'password' => $password
    );
    $is_insert = FM_INSERT_QUERY("tbl_admin",$form);
    echo ($is_insert)?1:0;
}
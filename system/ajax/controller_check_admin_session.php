<?php
include '../core/config.php';
$response = array();
if(isset($_SESSION['que']['admin_id'])){
    $response['is_session'] = 1;
    $response['admin_name'] = $_SESSION['que']['admin_name'];
    $response['admin_username'] = $_SESSION['que']['admin_username'];
    $response['admin_password'] = $_SESSION['que']['admin_password'];
}else{
    $response['is_session'] = 0;
}
echo json_encode($response);
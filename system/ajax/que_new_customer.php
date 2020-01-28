<?php
include '../core/config.php';
$type = $_POST['type'];

$type_name = ($type=='R')?"REGULAR":"PRIORITY";

$my_no_ = FM_SELECT_QUERY("COUNT(*)","tbl_que","DATE(que_date) = '$date' AND que_type = '$type'");
$current_number = $my_no_[0] + 1;

$form = array(
	'que_no' => $current_number,
	'que_type' => $type,
	'que_date' => $date_time
);

FM_INSERT_QUERY("tbl_que",$form);

$response = array();

$response['type_name'] = $type_name;
$response['que_no'] = sprintf("%04d", $current_number);
$response['date_time'] = date("F d, Y h:i A");

echo json_encode($response);
?>
<?php
include '../core/config.php';

$date = date('Y-m-d',strtotime($_REQUEST['date']));
$counter = $_REQUEST['counter'];
$inject_ = ($counter == 0)?"":"AND teller_id = '$counter'";

$r = FM_SELECT_QUERY("COUNT(*)","tbl_que_board","date = '$date' AND que_type = 'R' $inject_");
$p = FM_SELECT_QUERY("COUNT(*)","tbl_que_board","date = '$date' AND que_type = 'P' $inject_");



$response = [$r[0] * 1,$p[0] * 1];

echo json_encode($response);
<?php
include '../core/config.php';

$d = explode("-",$_REQUEST['month']);
$month = $d[1];
$year = $d[0];
$counter = $_REQUEST['counter'];

$categories = array("R" => "Regular","P" => "PWD / SENIOR CITIZEN / PREGNANT");
$backgroundColor = array('R' => 'rgba(0, 137, 132, .2)' , 'P' => 'rgba(105, 0, 132, .2)');
$borderColor = array('R' => 'rgba(0, 10, 130, .7)' , 'P' => 'rgba(200, 99, 132, .7)');

$no_days = cal_days_in_month(CAL_GREGORIAN,$month,$year);
$days = array();
for ($i=1; $i < $no_days + 1; $i++) { 
    $days[] = $i;
}

$response = array();

$response['labels'] = $days;

function getMonthlyData($que_type,$month,$year,$counter,$days){
    $inject_ = ($counter == 0)?"":"AND teller_id = '$counter'";
    $my_data = array();
    foreach($days as $day){
        $formatted_day = sprintf("%02d", $day);
        $date = "$year-$month-$formatted_day";
        $fetch = FM_SELECT_QUERY("COUNT(que_id)","tbl_que_board","(date) = '$date' AND que_type = '$que_type' $inject_");
        $my_data[] = $fetch[0] * 1;
    }
    return $my_data;
}
$response['datasets'] = array();
foreach($categories as $cat_code => $cat_name){
    $list = array();
    $list['label'] = $cat_name;
    $list['data'] = getMonthlyData($cat_code,$month,$year,$counter,$days);
    $list['backgroundColor'] = $backgroundColor[$cat_code];
    $list['borderColor'] = $borderColor[$cat_code];
    $list['borderWidth'] = 2;
    array_push($response['datasets'],$list);
}

echo json_encode($response);
<?php
include '../core/config.php';

$categories = array("R" => "Regular","P" => "PWD / SENIOR CITIZEN / PREGNANT");
$backgroundColor = array('R' => 'rgba(105, 0, 132, .2)' , 'P' => 'rgba(0, 137, 132, .2)');
$borderColor = array('R' => 'rgba(200, 99, 132, .7)' , 'P' => 'rgba(0, 10, 130, .7)');



$month = array("January","February","March","April","May","June","July","August","September","October","November","December");

$response = array();

$response['labels'] = $month;

function getMonthlyData($que_type){
    $my_data = array();
    $year = date('Y');
    for ($i=1; $i < 13; $i++) { 
        $fetch = FM_SELECT_QUERY("COUNT(que_id)","tbl_que","MONTH(que_date) = $i AND YEAR(que_date) = $year AND que_type = '$que_type'");
        $my_data[] = $fetch[0] * 1;
    }
    return $my_data;
}
$response['datasets'] = array();
foreach($categories as $cat_code => $cat_name){
    $list = array();
    $list['label'] = $cat_name;
    $list['data'] = getMonthlyData($cat_code);
    $list['backgroundColor'] = $backgroundColor[$cat_code];
    $list['borderColor'] = $borderColor[$cat_code];
    $list['borderWidth'] = 2;
    array_push($response['datasets'],$list);
}

echo json_encode($response);
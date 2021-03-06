<?php
include '../core/config.php';

$year = $_REQUEST['year'];
$counter = $_REQUEST['counter'];

$categories = array("R" => "Regular","P" => "PWD / SENIOR CITIZEN / PREGNANT");
$backgroundColor = array('R' => 'rgba(0, 137, 132, .2)' , 'P' => 'rgba(105, 0, 132, .2)');
$borderColor = array('R' => 'rgba(0, 10, 130, .7)' , 'P' => 'rgba(200, 99, 132, .7)');



$month = array("January","February","March","April","May","June","July","August","September","October","November","December");

$response = array();

$response['labels'] = $month;

function getMonthlyData($que_type,$year,$counter){
    $inject_ = ($counter == 0)?"":"AND teller_id = '$counter'";
    $my_data = array();
    for ($i=1; $i < 13; $i++) { 
        $fetch = FM_SELECT_QUERY("COUNT(que_id)","tbl_que_board","MONTH(date) = $i AND YEAR(date) = $year AND que_type = '$que_type' $inject_");
        $my_data[] = $fetch[0] * 1;
    }
    return $my_data;
}
$response['datasets'] = array();
foreach($categories as $cat_code => $cat_name){
    $list = array();
    $list['label'] = $cat_name;
    $list['data'] = getMonthlyData($cat_code,$year,$counter);
    $list['backgroundColor'] = $backgroundColor[$cat_code];
    $list['borderColor'] = $borderColor[$cat_code];
    $list['borderWidth'] = 2;
    array_push($response['datasets'],$list);
}

echo json_encode($response);
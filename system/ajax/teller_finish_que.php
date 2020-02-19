<?php
include '../core/config.php';

$teller_id = $_REQUEST['teller_id'];
$array_type = array('P' => 'PWD/SENIOR CITIZEN/PREGNANT','R' => 'REGULAR');
// FETCH CURRENT QUE DATA

$que_data = FM_SELECT_QUERY("board_id,que_id","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
if($que_data[0] > 0){
    // UPDATE TELLER
    $form_update_board = array('status' => 1);
    $form_update_que = array('que_status' => 1);
    FM_UPDATE_QUERY("tbl_que_board",$form_update_board,"board_id = '$que_data[0]'");
    FM_UPDATE_QUERY("tbl_que",$form_update_que,"que_id = '$que_data[1]'");
}

// FETCH LATEST QUE
$fetch_latest_que = FM_SELECT_QUERY("*","tbl_que","DATE(que_date) = '$date' AND que_status = 0 ORDER BY que_type ASC ,que_no ASC");

if($fetch_latest_que[0] > 0){
    $form_insert_board = array(
        'teller_id' => $teller_id,
        'que_id' => $fetch_latest_que[0],
        'que_no' => $fetch_latest_que[que_no],
        'que_type' => $fetch_latest_que[que_type],
        'date' => $date
    );
    FM_INSERT_QUERY("tbl_que_board",$form_insert_board);
    FM_UPDATE_QUERY("tbl_que",array('que_status'=>2),"que_id = '$fetch_latest_que[0]'");
    echo "<h1 style='margin:auto;'>".$array_type[$fetch_latest_que['que_type']]."</h1><span style='font-size:200px'>".sprintf("%04d",$fetch_latest_que[que_no])."</span><h2 style='margin:auto;'>(Other Transactions)</h2>";
}else{
    echo -1;
}
?>
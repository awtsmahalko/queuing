<?php
include '../core/config.php';
$teller_id = $_POST['teller_id'];
$que_data = FM_SELECT_QUERY("que_id,que_type,que_no","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
if($que_data[0] > 0){
    echo $que_data['que_type'] . "-" . sprintf("%04d", $que_data[que_no]);
}else{
    echo "------";
}
?>
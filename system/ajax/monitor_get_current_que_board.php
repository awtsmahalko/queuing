<?php
include '../core/config.php';

$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller","teller_status = 1");
foreach($loop_teller as $row){
    echo "<tr><td style='font-size:50px;color:#049408;'>$row[teller_name]</td><td style='font-size:50px;color:#049408;'>".getTellerQue($date,$row[teller_id])."</td></tr>";
}

function getTellerQue($date,$teller_id){
    $que_data = FM_SELECT_QUERY("que_id,que_type,que_no","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
    if($que_data[0] > 0){
        return $que_data['que_type'] . "-" . sprintf("%04d", $que_data[que_no]);
    }else{
        return "------";
    }
}
?>
<?php
include '../core/config.php';

$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller","teller_status = 1");
foreach($loop_teller as $row){
	$que = getTellerQue($date,$row[teller_id]);
	if($que == '-'){
		$color = "#049408;";
		$pr = ($que[0]  == 'R')?"REGULAR":"PRIORITY";
		$td_text = "------";
	}else{			
		$color = ($que[0]  == 'R')?"#049408;":"red;";
		$pr = ($que[0]  == 'R')?"REGULAR":"PRIORITY";
		$td_text = "<span style='font-size:30px !important;'>$pr</span><br><span>".$que[1]."</span>";
	}
    echo "<tr><td style='vertical-align:middle;font-size:50px;color:$color'>$row[teller_name]</td><td style='font-size:50px;color:$color'>$td_text</td></tr>";
}

function getTellerQue($date,$teller_id){
    $que_data = FM_SELECT_QUERY("que_id,que_type,que_no","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");
    if($que_data[0] > 0){
        // return $que_data['que_type'] . "-" . sprintf("%04d", $que_data[que_no]);
        return array($que_data['que_type'] ,sprintf("%04d", $que_data[que_no]));
    }else{
        return "-";
    }
}
?>
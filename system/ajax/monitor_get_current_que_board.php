<?php
include '../core/config.php';

$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller","teller_status = 1");
$response = array();
$content = '';
$message = '';
foreach($loop_teller as $row){
	$que = FM_SELECT_QUERY("board_id,que_type,que_no,bell_status","tbl_que_board","date = '$date' AND teller_id = '$row[teller_id]' AND status = 0");
	if($que[0] > 0){
		$que_no = sprintf("%04d", $que[que_no]);
		$color = ($que[que_type] == 'R')?"#049408;":"red;";
		$pr = ($que[que_type] == 'R')?"REGULAR":"PRIORITY";
		$td_text = "<span style='font-size:30px !important;'>$pr</span><br><span>".$que_no."</span>";
		$message .= ($que[bell_status] == 0)?"$pr $que_no, please proceed to $row[teller_name]":'';
		changeBellStatus($que[board_id],1);
	}else{
		$color = "#049408;";
		$pr = ($que[0]  == 'R')?"REGULAR":"PRIORITY";
		$td_text = "------";
	}
    $content .= "<tr><td style='vertical-align:middle;font-size:50px;color:$color'>$row[teller_name]</td><td style='font-size:50px;color:$color'>$td_text</td></tr>";
}

$response['tr'] = $content;
$response['message'] = $message;

echo json_encode($response);
?>
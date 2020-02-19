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
		$pr = ($que[que_type] == 'R')?"REGULAR":"PWD/SENIOR CITIZEN/PREGNANT";
		$h = ($que[que_type] == 'R')?"<h1 style='margin:auto;'>REGULAR</h1>":"<h4 style='margin:auto;'>PWD/SENIOR CITIZEN/PREGNANT</h4>";
		$td_text = "<span style='color:$color;'>$h<span style='font-size:100px'>$que_no</span></span>";
		$message .= ($que[bell_status] == 0)?"$pr $que[que_no], please proceed to $row[teller_name]":'';
		changeBellStatus($que[board_id],1);
	}else{
		$color = "#049408;";
		$pr = ($que[0] == 'R')?"REGULAR":"PRIORITY";
		$td_text = "<span style='font-size:115px'>------</span>";
	}

	$content .= "<div class='col-md-4'><div class='panel panel-default' style='border-color:$color;'>
		<div class='panel-heading text-center' style='background-color:$color;color:#fff;'>
			<h1 style='margin:auto;'>$row[teller_name]</h1>
		</div>
		<div class='panel-body text-center' style='min-height: 215px;overflow: auto;'>
			$td_text
		</div>
	</div></div>";
}

$response['tr'] = $content;
$response['message'] = $message;

echo json_encode($response);
?>
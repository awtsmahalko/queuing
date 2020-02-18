<?php
include '../core/config.php';

$teller_id = $_REQUEST['teller_id'];

$que = FM_SELECT_QUERY("board_id","tbl_que_board","date = '$date' AND teller_id = '$teller_id' AND status = 0");

changeBellStatus($que[board_id],0);
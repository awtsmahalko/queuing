<?php
include '../core/config.php';

$teller_id = $_POST['teller_id'];
$stat = $_POST['stat'];

$is_deleted = FM_UPDATE_QUERY("tbl_teller",array('teller_status' => $stat),"teller_id = '$teller_id'");
echo ($is_deleted)?1:0;
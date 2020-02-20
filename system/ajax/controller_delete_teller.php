<?php
include '../core/config.php';

$teller_id = $_POST['teller_id'];

$is_deleted = FM_DELETE_QUERY("tbl_teller","teller_id = '$teller_id'");
echo ($is_deleted)?1:0;
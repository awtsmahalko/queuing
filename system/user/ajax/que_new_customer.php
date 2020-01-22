<?php
include '../../core/config.php';
$type = $_POST['type'];

$my_no_ = FM_SELECT_QUERY("COUNT(*)","tbl_que","DATE(que_date) = '2020-08-12'");
echo $date;
?>
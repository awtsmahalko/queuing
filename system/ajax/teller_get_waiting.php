<?php
include '../core/config.php';

$loop = FM_SELECT_LOOP_QUERY("*","tbl_que","DATE(que_date) = '$date' AND que_status = 0 ORDER BY que_type ASC ,que_no ASC");
$content = "";
if(count($loop)>0){
    foreach($loop as $row){
        $content .= "<li class='list-group-item'>$row[que_type]-".sprintf("%04d", $row[que_no])."</li>";
    }
}

echo $content;
?>
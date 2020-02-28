<?php
include '../core/config.php';

$loop = FM_SELECT_LOOP_QUERY("*","tbl_que","DATE(que_date) = '$date' AND que_status = 0 ORDER BY que_type ASC ,que_no ASC");
$content = "";
if(count($loop)>0){
    foreach($loop as $row){
        $que_no_text = sprintf("%04d", $row[que_no]);
        $text = ($row[que_type]=='P')?
            "<span style='color:red;'>$que_no_text (".$my_type_arr[$row[que_type]].")</span>": 
            "<span>$que_no_text (".$my_type_arr[$row[que_type]].")</span>";
        $content .= "<li class='list-group-item'>$text</li>";
    }
}

echo $content;
?>
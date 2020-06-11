<?php
include '../core/config.php';
$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller");
$select_ = "<option value='0'> All Counter</option>";
if(count($loop_teller)>0){
    foreach($loop_teller as $row){
        $select_ .= "<option value='$row[teller_id]'> $row[teller_name]</option>";
    }
}
echo $select_;
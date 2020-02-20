<?php
include '../core/config.php';

$teller_name = clean($_POST['teller_name']);

$is_exist = FM_SELECT_QUERY("COUNT(*)","tbl_teller","teller_name = '$teller_name'");

if($is_exist[0]>0){
    echo -1;
}else{
    $form = array('teller_name' => $teller_name,'teller_status' => 1);
    $is_insert = FM_INSERT_QUERY("tbl_teller",$form);
    echo ($is_insert)?1:0;
}
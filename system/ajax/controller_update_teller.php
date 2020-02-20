<?php
include '../core/config.php';

$teller_id = $_POST['teller_id'];
$teller_name = clean($_POST['teller_name']);

$is_exist = FM_SELECT_QUERY("COUNT(*)","tbl_teller","teller_name = '$teller_name' AND teller_id != '$teller_id'");

if($is_exist[0]>0){
    echo -1;
}else{
    $form_ = array('teller_name' => $teller_name);
    $is_update = FM_UPDATE_QUERY("tbl_teller",$form_,"teller_id = '$teller_id'");
    echo ($is_update)?1:0;
}
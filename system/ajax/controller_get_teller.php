<?php
include '../core/config.php';
$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller");
if(count($loop_teller)>0){
    $count = 1;
    foreach($loop_teller as $row){
        echo "<tr>
            <td>$count</td>
            <td contenteditable='true' onblur='changeTeller($row[teller_id],this)'>$row[teller_name]</td>
            <td>$row[username]</td>
            <td onclick='deleteTeller($row[teller_id])'><button class='btn btn-sm btn-danger'><span class='fa fa-trash'></span></button></td>
        </tr>";
        $count++;
    }
}else{
    echo "<tr><td colspan='3'>No data found</td></tr>";
}
?>
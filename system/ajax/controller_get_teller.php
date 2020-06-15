<?php
include '../core/config.php';
$loop_teller = FM_SELECT_LOOP_QUERY("*","tbl_teller");
if(count($loop_teller)>0){
    $count = 1;
    foreach($loop_teller as $row){
        $action = ($row[teller_status]==1)?"<button onclick='setTellerStat($row[teller_id],0)' class='btn btn-sm btn-danger'><span class='fa fa-eye-slash'></span> Deactivate</button>":"<button onclick='setTellerStat($row[teller_id],1)' class='btn btn-sm btn-primary'><span class='fa fa-eye'></span> Activate</button>";
        echo "<tr>
            <td>$count</td>
            <td contenteditable='true' onblur='changeTeller($row[teller_id],this)'>$row[teller_name]</td>
            <td>$row[username]</td>
            <td>$action</td>
        </tr>";
        $count++;
    }
}else{
    echo "<tr><td colspan='3'>No data found</td></tr>";
}
?>
<?php
include '../core/config.php';
$loop_admin = FM_SELECT_LOOP_QUERY("*","tbl_admin");
if(count($loop_admin)>0){
    $count = 1;
    foreach($loop_admin as $row){
        echo "<tr>
            <td>$count</td>
            <td contenteditable='true' onblur='changeAdmin($row[admin_id],this)'>$row[admin_name]</td>
            <td>$row[username]</td>
            <td onclick='deleteAdmin($row[admin_id])'><button class='btn btn-sm btn-danger'><span class='fa fa-trash'></span></button></td>
        </tr>";
        $count++;
    }
}else{
    echo "<tr><td colspan='3'>No data found</td></tr>";
}
?>
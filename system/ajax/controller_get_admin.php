<?php
include '../core/config.php';
$loop_admin = FM_SELECT_LOOP_QUERY("*","tbl_admin");
if(count($loop_admin)>0){
    $count = 1;
    foreach($loop_admin as $row){
        $dis_ = ($_SESSION['que']['admin_id']==$row[admin_id])?'disabled':"";
        echo "<tr>
            <td>$count</td>
            <td>$row[admin_name]</td>
            <td>$row[username]</td>
            <td><button $dis_ onclick=\"deleteAdmin($row[admin_id],'$row[admin_name]')\" class='btn btn-sm btn-danger'><span class='fa fa-trash'></span></button></td>
        </tr>";
        $count++;
    }
}else{
    echo "<tr><td colspan='3'>No data found</td></tr>";
}
?>
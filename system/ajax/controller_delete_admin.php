<?php
include '../core/config.php';

$admin_id = $_POST['admin_id'];

FM_DELETE_QUERY("tbl_admin","admin_id = '$admin_id'");
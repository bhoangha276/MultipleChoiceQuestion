<?php
// include "Models/DBConfig.php";

$db = new Database;
$db->connect();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$thanhcong = array();

switch ($action) {
    case 'add': {
            require_once('Views/users/add-user.php');
            break;
        }
    default: {
            $id = 2;

            $table =  "tbl_users";
            $data = $db->getDataByID($table, $id);

            $data_class = $db->getClassesByID($id);

         
            require_once('Views/profile/index.php');
            break;
        }
}

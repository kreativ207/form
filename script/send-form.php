<?php
require_once('../M_PDO.php');

if($_POST){
    $table = 'form';
    $db = M_PDO::Instance();
    $db->Insert($table, $_POST);
    $allRecordsAjax = $db->Select("SELECT * FROM {$table} ORDER BY `id` DESC");
    include_once('../views/ajax-main.php');
}
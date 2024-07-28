<?php

namespace controllers\notes;

use core\DatabaseConnection;

$dbCreds  = require base_path('services/database.php');
$header = 'Note ';

$testconn = new DatabaseConnection($dbCreds['local']);

if(isset($_REQUEST['_method']) && $_REQUEST['_method']== 'DELETE'){
    $id = $_POST['id'];
    $deleteRecord = $testconn->query('delete from notes where id = :id', [':id' => $_POST['id']]);
    if($deleteRecord){
       return header("Location: /posts");
    }
}

$testconn = new DatabaseConnection($dbCreds['local']);
$contactData = $testconn->query('select * from notes where id = :id', [':id' => $_GET['id']])->findOrFail();
view('notes/show.view.php', ['contactData' => $contactData, 'header' => $header]);
<?php

require base_path('database/DatabaseConnection.php');
$dbCreds  = require base_path('services/database.php');
$header = 'Post Page';

$testconn = new DatabaseConnection($dbCreds['local']);
$contactData = $testconn->query('select * from posts where id = :id', [':id' => "1"])->find();

view('notes/posts.view.php', ['contactData' => $contactData, 'header' => $header]);
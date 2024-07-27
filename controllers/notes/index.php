<?php

namespace controllers\notes;

use core\DatabaseConnection;

$dbCreds  = require base_path('services/database.php');
$header = 'Notes Page';

$testconn = new DatabaseConnection($dbCreds['local']);
// $contactData = $testconn->query('select * from posts where id = :id', [':id' => "1"])->get();
$contactData = $testconn->query('select * from notes')->get();
view('notes/index.view.php', ['contactData' => $contactData, 'header' => $header]);
<?php


$config = require bash_path('config.php');
$db = new Database($config['database']);



$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


require view("notes/index.view.php",
[
    'heading'=>'My notes',
    'notes' =>$notes
]);
 
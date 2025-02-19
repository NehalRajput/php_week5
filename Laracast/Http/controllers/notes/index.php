<?php


use core\App;
use core\Database;

$db= App::resolve(Database::class);



$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


require view("notes/index.view.php",
[
    'heading'=>'My notes',
    'notes' =>$notes
]);
 
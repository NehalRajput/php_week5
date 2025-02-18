<?php
use core\Database;


$config = require bash_path('config.php');
$db = new Database($config['database']);


$currentUserId = 1;

 

$note = $db->query('select * from notes where  id = :id', [ 'id' => $_GET['id']
    ])->findOrfail();
    

 authorize($note['user_id'] === $currentUserId);

    

    //dd($note);


     view("notes/show.view.php",
    [
        'heading'=>'Note',
        'note'=> $note
    ]);



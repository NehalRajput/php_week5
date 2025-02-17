<?php
use core\Database;

$config = require bash_path('config.php');
$db = new Database($config['database']);
$currentUserId = 1;

if($_SERVER['REQUEST_METHOD']=== 'POST')
{
   //form was submitted and delete the  current note.
  

$note = $db->query('select * from notes where  id = :id', [ 'id' => $_GET['id']
    ])->findOrfail();
    

    authorize($note['user_id'] === $currentUserId);

 $db->query('DELETE FROM notes WHERE id = :id', [ 

    'id' => $_GET['id']
 ]);
 

  header('location:/notes');
  exit();

}
else
{

$note = $db->query('select * from notes where  id = :id', [ 'id' => $_GET['id']
    ])->findOrfail();
    

    authorize($note['user_id'] === $currentUserId);

    

    //dd($note);


    require view("notes/show.view.php",
    [
        'heading'=>'Note',
        'note'=> $note
    ]);


}
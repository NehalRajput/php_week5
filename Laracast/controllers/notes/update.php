<?php


use core\App;
use core\Database;
use core\validator;

$db= App::resolve(Database::class);


$currentUserId = 1;

 //find the corresponding the note

$note = $db->query('select * from notes where  id = :id', [ 'id' => $_POST['id']
    ])->findOrfail();
    

//authorize that the current user and edit the notes

authorize($note['user_id']=== $currentUserId);

//validate the form
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

//if no  validation erros , update the record in the notes databse table.

if(count($errors))
{
    return view('notes/edit.view.php',[
 
       'heading' => 'Edit Note',
      'errors'=> $errors,
      'note'=> $note
    
    ]);

}

$db->query('update notes set body = :body where id = :id',[

    'id' => $_POST['id'],

    'body'=>$_POST['body']
]);

//redirect the user

header('location:/notes');
die();


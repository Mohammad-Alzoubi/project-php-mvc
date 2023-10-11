<?php

require './Validator.php';
$config = require 'config.php';
$db     = new Database($config['database']);


$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

//    this way we use new object;
//    $validator = new Validator();
//    if (! $validator->string(trim($_POST['body']), 1, 1000)){

    // Here we use static method.
    if (! Validator::string(trim($_POST['body']), 1, 1000)){
        $errors['body'] = 'A body of no more than 1000 character is required';
    }

//    if (strlen($_POST['body']) >1000){
//        $errors['body'] = 'The body can not be more than 1000 character';
//    }

//    validate email
//    if (! Validator::email('test@gmail.com'))
//    {
//        dd('That is not a validate email.');
//    }





    if (empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
           'body' => $_POST['body'],
           'user_id' => 1,
        ]);
    }

}

require('view/notes/create.view.php');
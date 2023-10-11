<?php


$config = require('config.php');
$db     = new Database($config['database']);

$heading = 'Note';
$currentUserId = 1;


$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();


authorize($note['user_id'] == $currentUserId, Response::FORBIDDEN);

//if ($note['user_id'] != $currentUserId){
//    abort(Response::FORBIDDEN);
//}





require('view/notes/show.view.php');
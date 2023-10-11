<?php

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'function.php';

//require base_path( 'Database.php'); Or
spl_autoload_register(function ($class){
    require base_path("Core/{$class}.php");
});

//require base_path( 'Response.php');
require base_path( 'router.php');


//
//$id = $_GET['id'];
//$query = "select * from posts where id = ?";

/*

if user id = :id
when you send use this:
['id' => $id]
*/

//dd($query);
//$posts = $db->query($query, [$id])->fetch();
//dd($posts);
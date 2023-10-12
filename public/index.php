<?php

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/function.php';

//require base_path( 'Database.php'); Or
spl_autoload_register(function ($class){

    $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

//require base_path( 'Response.php');
require base_path( 'Core/router.php');


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
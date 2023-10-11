<?php

class Validator
{
    public static function string($value, $min= 1, $max= INF) // you can use static method when the all classe don't use 'this'
    {
        $value = trim($_POST['body']);
        return strlen($value) >= $min &&  strlen($value) <= $max;
    }

    public static function email($value)
    {
        // Validator::email(jon@example.com)
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
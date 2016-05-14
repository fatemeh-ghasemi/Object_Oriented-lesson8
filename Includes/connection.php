<?php
$database = new mysqli("localhost", "root", "", "phonebook");
$database->query("SET NAMES 'utf8'");

spl_autoload_register(function ($class){
    require __DIR__."/$class.php";
});


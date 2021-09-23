<?php
session_start();
require "model/Student.php";
require "model/StudentRepository.php";
require "./config.php";
require "./connectDB.php";
require "./functions.php";

$a = $_GET['a'] ?? "student";
$c = $_GET['c'] ?? "list";

$controllerName = ucfirst($a) . "Controller";//in ra StudentController 

require "controller/" . $controllerName . ".php" ; 

$controller = new $controllerName();// gọi class: new StudentController 

$controller -> $c(); // $controller -> list ()

 ?>
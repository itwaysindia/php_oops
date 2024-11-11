<?php 
include('namespace-a.php');
include('namespace-b.php');

use include\classes\abc\file1 as abcA;
$obj= new abcA\abc;
$obj->fun1();
?>
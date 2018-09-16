<?php 
$user = 'root';
$pass = '';

$db = new PDO('mysql:host = localhost; dbname=test',$user , $pass, Array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));

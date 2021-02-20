<?php

define('DB_NAME' , 'book_reader');
define('DB_HOST' , 'localhost');
define('DB_USER' , 'root');
define('DB_PASSWORD' , '');

// connect with sever
//$handle = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Could not connect...');
$handle = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($handle->connect_error) {
    die("Connection failed: " . $handle->connect_error);
}

//-----------------------------------------------
// to used ARABIC language
@mysqli_query($handle,"SET NAMES 'utf8'");
@mysqli_query($handle,"SET CHARACTER SET utf8");
@mysqli_query($handle,"SET SESSION collation_connection = 'utf8_general_ci'");

function reader_db_close(){
    global $handle;
    mysqli_close($handle);
}
<?php

/* opgave 6 Det her er en rest api med kun get kald
jeg kan lave en if statement der kigger efter put delete og andre http requests
*/
//Acess with .php/tablename
header("Access-Control-Allow-Origin: *");
 
//Get String array with the path requests without delimiter "/"
$path_request = explode('/', trim($_SERVER['PATH_INFO'],'/'));



// get Database connection
include 'databaseconnection.php';
$conn->set_charset("utf8");
 
// retrieve table by shifting first array element and replacing special chars
// retrieve key by shifting second array element
$table = preg_replace('/[^a-z0-9_]+/i', '', array_shift($path_request));
$key = array_shift($path_request);
 
// create SQL statement
$sql = "SELECT * from `$table`".($key ? " WHERE id = $key" : '');

// excecute SQL statement
$result = $conn->query($sql);
 
// encode resultset to JSON
  if (!$key) echo '[';
  while($row = $result->fetch_assoc()) {
    echo ($count > 0 ? ',' : '') . json_encode($row);
    $count++;
  } 
  if (!$key) echo ']';
 
// close mysql connection
$conn->close();
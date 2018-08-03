<?php
function connectDatabase($serverName,$userName,$passWord){
    $conn = mysqli_connect($serverName,$userName,$passWord);
    if(!$conn){
       die("Connection failed: ".mysqli_connect_error());
    } 
    return $conn;
} 

?>
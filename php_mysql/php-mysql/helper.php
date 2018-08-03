<?php
// function connectDatabase($serverName = "localhost", $userName = "root", $password = "123456")
// {
//     $conn = new mysqli($serverName, $userName, $password);
//     if ($conn->connect_error) {
//         return die("Connection failed : " . $conn->connect_error);
//     }
//     return $conn;
// }

function connectDatabase($serverName,$userName,$passWord){
    $conn = mysqli_connect($serverName,$userName,$passWord);
    if(!$conn){
       die("Connection failed: ".mysqli_connect_error());
    } 
    return $conn;
} 
?>

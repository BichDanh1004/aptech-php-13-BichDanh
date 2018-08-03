<?php
require './connect.php';
$serverName = "localhost";
$userName = "root";
$passWord = "";
$conn = connectDatabase($serverName,$userName,$passWord);

$sql_create_db = "create database login";
$create_db = mysqli_query($conn, $sql_create_db);
 if (mysqli_query($conn, $sql_create_db)) {
     echo "Database created successfully <br>";
 } else {
     echo "Error creating database: " . mysqli_error($conn).'<br>';
 }

$sql_create_table = "create table login.users (
    id int auto_increment primary key ,
    name varchar(50) not null,
    email varchar(100) not null unique,
    password varchar(50) not null
)";
$create_table =mysqli_query($conn, $sql_create_table) ;



 if (mysqli_query($conn, $sql_create_table)) {
     echo "Table created successfully <br>";
 } else {
    echo "Error creating table: " . mysqli_error($conn).'<br>';
 }

$sql_insert_data ="insert into login.users (name,email,password) values ('Danh','bichdanh1004@gmail.com','123'),
('Nhung','nhung@gmail.com','123'),
('Ngoc','ngoc@gmail.com','123'),
('Lan','lan@gmail.com','123'),
('Ha','ha@gmail.com','123')";
$insert = mysqli_query($conn,$sql_insert_data );
 if($insert){
     echo "Success <br>";
 }else {
     echo "Error <br>";
}

?>

<?php
echo "<a href=\"./\">BACK</a>";
/* 3. --- CREATE TABLE ---
 *
 * Using MySQLi
 *
 */

echo "<h1>3. CREATE TABLE</h1>";

/*
 * EXERCISE 1 : Create table User.
 *
 */

/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();

$sql = "CREATE TABLE namnh_news.nnUser (
uId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uLastName varchar(255),
uFirstName varchar(255),
uEmail varchar(255) NOT NULL UNIQUE,
uRole int NOT NULL DEFAULT 2,
uState int NOT NULL DEFAULT 1,
uCreatedDate datetime NOT NULL DEFAULT NOW(),
uModifiedDate datetime
)";

if ($conn->query($sql) === true) {
echo "Table nnUser created successfully";
} else {
echo "Error creating table : " . $conn->error;
}

$conn->close();
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
require './helper.php';
$serverName = "localhost";
$userName = "root";
$passWord = " ";
$conn = connectDatabase($serverName,$userName,$passWord);
$sql = "Create table ngocha_books.user (
    uId int not null auto_increment primary key,
    uLastName varchar(200),
    uFirstName varchar(200),
    uEmail varchar(200) not null unique,
    uRole int not null default 2,
    uState int not null default 1,
    uCreatedDate datetime not null default now(),
    uModifiedDate datetime
    )";
if(mysqli_query($conn,$sql)){
    echo "Table user created successfully";
}
else{
    echo "Error creating table ".mysqli_error($conn);
}
mysqli_close($conn);
?>
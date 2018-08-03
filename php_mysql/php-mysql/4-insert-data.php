<?php
echo "<a href=\"./\">BACK</a>";
/* 4. --- INSERT DATA ---
 *
 * Using MySQLi
 *
 */

echo "<h1>4. INSERT DATA</h1>";

/*
 * EXERCISE 1 : Insert at least 5 users into User table.
 *
 */

/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "INSERT INTO namnh_news.nnUser (uLastName,uFirstName,uEmail,uRole)
VALUES
( 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1),
( 'John', 'Cenna', 'cenna.john@hotmail.com', 2),
( 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2),
('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1),
( 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2)";

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
$passWord = "123456";
$conn = connectDatabase($serverName, $userName, $passWord);
$sql = "insert into ngocha_books.user (uLastName,uFirstName,uEmail,uRole) values
('Man','Nam','man@gmail.com',1),
('Danh','Bich','bichdanh@gmail.com',1),
('An','Hong','hongan@gmail.com',2),
('Nhung','My','mynhung@gmail.com',3),
('Giang','Thu','thugiang@gmail.com',2)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

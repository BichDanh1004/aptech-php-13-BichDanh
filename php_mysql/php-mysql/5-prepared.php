<?php
echo "<a href=\"./\">BACK</a>";
/* 5. --- PREPARED ---
 *
 * Using MySQLi
 *
 */

echo "<h1>5. PREPARED</h1>";

/*
 * EXERCISE 1 : Create prepare and insert some values.
 *
 */

/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();

$stmt = $conn->prepare("INSERT INTO namnh_news.nnUser (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail, $uRole);

$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;
$stmt->execute();

echo "Using Prepared to insert new data successfully";

$stmt->close();
$conn->close();
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
require './helper.php';
$serverName = "localhost";
$userName = "root";
$passWord = " ";
$conn = connectDatabase($serverName, $userName, $passWord);

$stmt= $conn->prepare("insert into ngocha_books.user (uLastName,uFirstName,uEmail,uRole) values (?,?,?,?)");
//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail,$uRole);


$uLastName="Nam";
$uFirstName="Bui";
$uEmail="buinam@gmail.com";
$uRole=1;
$stmt->execute();

$uLastName="An";
$uFirstName="Mai";
$uEmail="maian@gmail.com";
$uRole=2;
$stmt->execute();

$uLastName="Thuy";
$uFirstName="Thu";
$uEmail="thuthuy@gmai.com";
$uRole=2;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

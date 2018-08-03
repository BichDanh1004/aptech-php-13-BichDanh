<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- CREATE DATABASE ---
 *
 * Using MySQLi
 *
 */

echo "<h1>2. CREATE DATABASE</h1>";

/*
 * EXERCISE 1 : Create database name is yourname_project.
 *
 */

/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();

$sql = "CREATE DATABASE namnh_news";
if ($conn->query($sql) === true) {
echo "Database created successfully";
} else {
echo "Error creating database : " . $conn->error;
}
$conn->close();
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

require './helper.php';
$serverName = "localhost";
$userName = "root";
$passWord = " ";
$conn =connectDatabase($serverName,$userName,$passWord);
$sql = "Create database ngocha_books";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


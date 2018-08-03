<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <table class="table table-striped">
 
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>

    <tbody>
<?php
  require './connect.php';
  $serverName = "localhost";
  $userName = "root";
  $passWord = " ";
  $conn = connectDatabase($serverName, $userName, $passWord);

  if (isset($_POST["submit"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $sql = "select * from login.users where email = '$email' and password = '$password' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_num_rows($result);
      if ($row > 0) {
          $sql_select_users = "select * from login.users";
          $select_user = mysqli_query($conn, $sql_select_users);
          if (mysqli_num_rows($select_user) > 0) {
              while ($row = mysqli_fetch_assoc($select_user)) {
                  $uId = $row["id"];
                  $uName = $row["name"];
                  $uEmail = $row["email"];
                  $uPassWord = $row["password"];
                  ?>
        <tr>
          <td><?php echo $uId ?></td>
          <td><?php echo $uName ?></td>
          <td><?php echo $uEmail ?></td>
          <td><?php echo $uPassWord ?></td>
        </tr>
        <?php
  }
          }
      } else {
          echo "Failed";
      }
  }
?>
       </tbody>
    </table>
  </div>
</body>
</html>


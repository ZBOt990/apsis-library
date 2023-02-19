<?php


$host = "localhost";
$user = "id20314222_apsislib";
$password = "[gEt{aGXCL@8hBZX";
$dbname = "id20314222_library";


$conn = mysqli_connect($host, $user, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["username"]) && isset($_POST["password"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  
  if (mysqli_num_rows($result) == 1) {
    header("Location: home.html");
    exit();
  }

  
  else {
    echo "<div class='alert alert-danger'>Invalid username or password</div>";
  }

}


mysqli_close($conn);

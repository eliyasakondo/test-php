<?php
$conn = mysqli_connect("localhost", "root", "", "academic");
if (!$conn) {
  echo ("Error Connection:" . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $sql = "select * from admin where user_name= '$user_name' and password = '$password'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "Login Success";
    header("Location: course_register.php");
  } else {
    echo "login failed";
  }
}

<?php
session_start();
$_SESSION['authuser'] = 0;
$_SESSION['username'] = "";
$_SESSION['user_id'] = "";
/*Ending session */
if(isset($_POST['user_email']) && !empty($_POST['user_email']) AND isset($_POST['user_password']) && !empty($_POST['user_password'])) {
  $connection = mysqli_connect("localhost", "id6446073_arjun", "arjun1995", "id6446073_loheranote");
  if(mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
  $email = mysqli_real_escape_string($connection, $_POST['user_email']);
  $password = mysqli_real_escape_string($connection, $_POST['user_password']);
  // $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);


  $result = mysqli_query($connection, "SELECT id, user_name, active FROM user_info WHERE email='".$email."' AND password='".$password."' AND active='1'") or die("query not run: " . mysqli_error($connection));
  $match  = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);



  if($match > 0 && $row["active"] == 1) {
    $_SESSION['authuser'] = 1;
    $_SESSION['username'] = $row['user_name'];
    $_SESSION['user_id'] = $row['id'];
    header("Location: blog.php");
  } else {
    echo "<script>
    window.location='index.php';
    alert('Either Wrong email | password or Activate your account');
    </script>";
  }
} else {
  echo "<script>
  window.location='index.php';
  alert('Email or password can't be blank');
  </script>";
}
/* free result set */
mysqli_free_result($result);
mysqli_close($connection);
?>
<!-- end of php script for login -->
<!-- php script for login -->

<!-- Insert blog details in database -->
<?php
session_start();
if(isset($_POST['title']) && !empty($_POST['title']) AND isset($_POST['blog_content']) && !empty($_POST['blog_content'])) {
  if(!isset($_SESSION['authuser']) && $_SESSION['authuser'] != 1) {
    header("Location: index.php");
    exit();
  }
  $connection = mysqli_connect("localhost", "root", "arjun1995", "loheranote");
  if(mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
  $title = mysqli_real_escape_string($connection, $_POST['title']);
  $blog_content = mysqli_real_escape_string($connection, $_POST['blog_content']);
  $query = "insert into blog (author_name, title, main_content, user_id) VALUES ('". $_SESSION['username'] ."', '". $title ."', '". $blog_content ."', '". $_SESSION['user_id'] ."')";
  if(mysqli_query($connection, $query)) {
      header("Location: wall.php");
    } else {
        echo "<h1>Error: " . $query . "<br>" . mysqli_error($connection) . "</h1>";
    }
    mysqli_close($connection);
}
?>

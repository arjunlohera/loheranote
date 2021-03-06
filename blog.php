<?php
session_start();
if(empty($_SESSION['authuser']) || !isset($_SESSION['authuser']) || $_SESSION['authuser'] != 1) {
  header("Location: index.php");
  exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <title><?php echo $_SESSION['username'];?>, write your Blog Post | LoheraNote</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- build:css css/main.css -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- endbuild -->
</head>
<body>
  <nav class="primary-color navbar navbar-expand-lg navbar-dark ">
    <p class="text-white">Welcome, <?php echo $_SESSION['username'];?></p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="wall.php"><i class="fa fa-edit"></i> Wall</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-arrow-circle-right"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <header class="primary-color pb-5">
    <h1 class="secondary-color text-center text-white"><i class="fa fa-braille"></i> LoheraNote</h1>
  </header>
  <div class="container my-5">
    <div class="row">
      <div class="col-12 col-md-8">
        <form action="writeblog.php" method="post">
          <div class="form-group">
            <label for="title" class="h5 my-1">Title</label>
            <input class="form-control form-control-lg mb-2" name="title" id="title" type="text" placeholder="Title">
            <label for="blog" class="h5 my-1">Blog post</label>
            <textarea class="form-control form-control-lg" id="blog" name="blog_content" rows="8" placeholder="Write your post here..."></textarea>
          </div>
          <button type="submit" class="btn primary-color text-white mb-3">Post Now</button>
        </form>
      </div>
    </div>
  </div>
  <!-- build:js js/main.js -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- endbuild -->
</body>
</html>

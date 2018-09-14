<!doctype html>
<html lang="en">
<head>
  <title>Home | LoheraNote</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- stylesheets -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="primary-color navbar navbar-expand-lg navbar-dark ">
      <a class="navbar-brand" href="#"><i class="fa fa-braille"></i> LoheraNote</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="blog.php"><i class="fa fa-edit"></i> Write a blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-arrow-circle-right"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Blogs content -->
  <div class="container mt">
    <!-- php script for wall -->
    <?php
    $connection = mysqli_connect("localhost", "root", "arjun1995", "loheranote");
    if(mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = "select * from blog order by timestamp desc";
    $result = mysqli_query($connection, $query)or die("query not run: " . mysqli_error($connection));
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
<!-- add text here -->
<div class="row mb-5 justify-content-around">
  <div class="col-12 col-md-10">
    <div class="card border mb-3">
      <div class="card-header bg-transparent border h4"><?php echo $row['title'];?></div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['author_name'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['timestamp'];?></h6>
        <p class="card-text text-justify"><?php echo $row['main_content']; ?></p>
      </div>
      <div class="card-footer bg-transparent border">
        <button type="button" class="btn btn-outline-primary"><i class="fa fa-thumbs-up"></i> Like
          <span class="badge badge-pill badge-primary">100</span>
        </button>
        <button type="button" class="btn btn-outline-primary ml-2"><i class="	fa fa-share-square"></i> Share
        </button>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<!-- end -->
<!-- end of php script for wall -->
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 pt-5">
        <p class="text-muted text-center ">
          Designed and Developed with <span class="fa fa-heart"></span> by Arjun Lohera
        </p>
      </div>
    </div>
  </div>
</footer>

  <!-- javascript -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

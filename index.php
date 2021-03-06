<!-- Login | Registration Page -->
<!doctype html>
<html lang="en">
<head>
  <title>Login | LoheraNote</title>
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
  <header class="jumbotron primary-color pb-5">
    <h1 class="secondary-color text-center text-white"><i class="fa fa-braille"></i> LoheraNote</h1>
  </header>

  <div class="container mt-5">
    <div class="row justify-content-around">
      <div class="col-12 col-md-4">
        <!-- Tabbed navigation -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Login</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane border fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form class="px-1" action="registration.php" method="post">
              <h3 class="text-muted my-3">Register</h3>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="inputEmail1">Email</label>
                <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label for="inputPhone">Contact Number</label>
                <input type="phone" class="form-control" id="inputPhone" name="inputPhone" placeholder="+91-98000-00000">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <!-- <input type="password" class="form-control" id="password" placeholder="Enter password"> -->
                <input class="form-control" placeholder="Enter password" name="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : ''); if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);">

              </div>
              <div class="form-group">
                <label for="confirm_password">Retype Password</label>
                <!-- <input type="password" class="form-control" id="confirm_password" placeholder="Retype password"> -->
                <input class="form-control" placeholder="Retype password" title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');">
              </div>
              <button type="submit" class="btn primary-color text-white mb-3">Register</button>
            </form>
          </div>

          <div class="tab-pane border fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form class="px-1" action="login_verify.php" method="post">
              <h3 class="text-muted my-3">Login</h3>
              <div class="form-group">
                <label for="user_email">Email address</label>
                <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password">
              </div>
              <button type="submit" class="btn primary-color text-white mb-3">Login</button>
            </form>
          </div>
        </div>
        <!-- end of tabbed navigation -->
      </div>
    </div>
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


  <!-- build:js js/main.js -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery.validate.min.js"></script> -->
  <!-- endbuild -->
</body>
</html>

<!--
Store fill-in Registration information to database
Send verify email to user's email id.
-->
<?php
if(isset($_POST['inputName']) && !empty($_POST['inputName']) AND isset($_POST['inputEmail1']) && !empty($_POST['inputEmail1']) AND isset($_POST['inputPhone']) && !empty($_POST['inputPhone']) AND isset($_POST['password']) && !empty($_POST['password'])) {
  $connection = mysqli_connect("localhost", "id6446073_arjun", "arjun1995", "id6446073_loheranote");

  if(mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
    $username = mysqli_real_escape_string($connection, $_POST['inputName']);
    $email = mysqli_real_escape_string($connection, $_POST['inputEmail1']);
    $mobile_no = mysqli_real_escape_string($connection, $_POST['inputPhone']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $hash = sha1(rand(0, 1000));

    $query = "insert into user_info (user_name, email, mobile_no, password, hash) VALUES('". $username . "','" . $email . "','" . $mobile_no . "','" . $password . "','" .$hash . "')";

    if (mysqli_query($connection, $query)) {
        echo "<script>
        window.location='index.php';
        alert('Your Account has been created. You have to verify your email id before login.');
        </script>";
        // echo "http://localhost:8080/LoheraNote/verify.php?email=" . $email ."&hash=" . $hash; /*Working*/
        /* sending email */
        $to      = $email; // Send email to our user
        $subject = 'Signup | Verification'; // Give the email a subject
        $message = '

         Hi '.$username.',
        Thanks for signing up!
        Your account has been created, you can login with your credentials after you have activated your account by pressing the url below.

        Please click this link to activate your account:
        http://localhost:8080/LoheraNote/verify.php?email='.$email.'&hash='.$hash.'

        '; // Our message above including the link

        $headers = 'From:noreply@loheranote.tk' . "\r\n"; // Set from headers
        mail($to, $subject, $message, $headers); // Send our email
        /*end of sending email */

    } else {
        echo "<script>
        window.location='index.php';
        alert('Email already registered.');
        </script>";
    }
    mysqli_close($connection);
} else {
  echo "<script>
  window.location='index.php';
  </script>";
}
?>

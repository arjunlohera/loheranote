<!--
verify account through email
update the active status (active)
-->
<?php
$connection = mysqli_connect("localhost", "id6446073_arjun", "arjun1995", "id6446073_loheranote");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysqli_real_escape_string($connection, $_GET['email']); // Set email variable
    $hash = mysqli_real_escape_string($connection, $_GET['hash']); // Set hash variable
    $search = mysqli_query($connection, "SELECT email, hash, active FROM user_info WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($connection));
    $match  = mysqli_num_rows($search);
    if($match > 0) {
      // We have a match, activate the account
      mysqli_query($connection, "UPDATE user_info SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($connection));
      echo '<h5>Your account has been activated, you can now login</h5>';
    } else {
       // No match -> invalid url or account has already been activated.
       echo '<h5>The url is either invalid or you already have activated your account.</h5>';
    }
} else{
    // Invalid approach
    echo '<h5>Invalid approach, please use the link that has been send to your email.</h5>';
}
  mysqli_close($connection);
?>

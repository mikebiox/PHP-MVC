<?php
    include_once ('header.php');
    include_once ('user.php');

    $user = new User ();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userDetails = $_REQUEST['details'];

        $hash = $user->get_hash(strtolower($userDetails['username']));
        
        if (password_verify($userDetails['password'], $hash['password'])) {
            $_SESSION['isAuthenticated'] = 1;
            echo "SUCCESS!"; die;
        } else {
            echo "FAIL"; die;
        }
        
    }
?>

<h2>Login</h2>

<form action="login.php" method="post">
  Username:<br>
  <input type="text" name="details[username]">
  <br>
  Password:<br>
  <input type="password" name="details[password]">
  <br><br>
  <input type="submit" value="Login">
</form> 
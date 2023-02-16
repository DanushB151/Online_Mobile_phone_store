<!-- <?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?> -->

<?php

// ob_start();
if (isset($_POST['signin'])){
  	header('Location:index.php');
}

if (isset($_POST['register'])){
  	header('Location:a.htnl');
  }
// // ob_end_flush();
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
  </head>
  <body>
          <h1>Dash board</h1>

            <form class="form1" action="index.php" method="post">
                  <button type="signin" value="signin">Sign in</button>
            </form>

            <form class="form2" action="a.html" method="post">
                  <button type="register" value="register">Register</button>
            </form>


  </body>
</html>

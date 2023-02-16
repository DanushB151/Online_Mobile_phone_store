<?php
if (isset($_POST['signin'])){
  	header('Location:index.php');
}

if (isset($_POST['register'])){
  	header('Location:a.htnl');
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dash board with youtube</title>
    <link rel="stylesheet"  href="2113.css">
  </head>
  <body>
        <div class="banner">
          <div class="navbar">
                    <img src="logo.png" class="logo">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>

              <div class="content">
                  <h1>MYMOBILE.LK</h1>
                  <p>The largest online mobile phone shopping store</p>

                  <div>
                  <form class="form1" action="index.php" method="post">
                    <button type="signin" value="signin"><span></span>SIGN UP</button>
                  </form>

                  <form class="form2" action="a.html" method="post">
                   <button type="register" value="register"><span></span>REGISTER</button>
                  </form>


                  </div>

              </div>

        </div>
  </body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
        $loginAdmin = new AdminController();
        $loginAdmin->Adminauth();
    }
?>


<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/style1.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Login form</title>

  </head>
  <h2 class="logo">LMS</h2>
  <body><div id="sideNav">
     <nav>
     <ul>
        <li><a href="home">HOME</a></li>
        <li><a href="about">ABOUT</a></li>
        <li><a href="contact">CONTACT</a></li>
        <li><a href="signup">SIGNUP</a></li>
        <li><a href="choicelogin">LOGIN</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="images/menu.png" id="menu">
</div>
  <!-- for background -->
  <div class="background"></div>
  <?php include('./views/includes/alerts.php');?>

  <!-- for form container -->
  <div class="container">
    <h2> Admin Login</h2>
    <form method="post">

      <div class="form-item">
        
        <input type="text" name="username"  placeholder=" Username">
      </div>

      <div class="form-item">
        
        <input type="password" name="password"  placeholder="password">
      </div>

      <button type="submit" name="submit"><strong>LOGIN</strong></button>

      <div class="options">
        
      </div>

      

    </form></div> 
</body>

</html>
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")
    sideNav.style.right ="-250px"; 
    menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){
            sideNav.style.right = "0";
            menu.src = "public/assets/close.png";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src ="public/assets/menu.png";
        }
    }
</script>
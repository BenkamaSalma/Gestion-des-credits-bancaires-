<?php 
    if(isset($_POST['submit'])){
        $loginUser = new ManagerController();
        $loginUser->authmanager();
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager login page | LOAN MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/stylelogin.css">
</head>
<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">LMS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home">HOME</a></li>
                    <li><a href="about">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="choicelogin">LOGIN</a></li>
                
                </ul>
            </div>
        </div>
   </div>



<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Manager Login</h3>
                </div><div class="form">
                <div class="card-body bg-light">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                        </div>
                        <button name="submit" class="btn btn-sm btn-primary">Connexion</button>
                    </form>
                </div>

              
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
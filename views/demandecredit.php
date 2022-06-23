<?php 
    if(isset($_POST['submit'])){
        $createDemande = new DemandeController();
        $createDemande->create();
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME | LOAN MANAGEMENT SYSTEM ?></title>
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/demandestyle.css">
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
                    <li><a href="choicelogin">LOGOUT</a></li>
                    
                </ul>
            </div>
        </div> 
        <div class="content">
            
          
          <h1> Hello <?php echo $_SESSION['username'];
          ?> </h1>
            <h2>Please fill the form below:</h2>
            <div class="form">
               <form method="post" class="mr-1">
                 <div class="form-group">
                        Entrer le type de crédit désiré: <input type="text" name="typecredit"  class="form-control" required>
                    </div>
                        <div class="form-group">
                        Entrer le montant désiré: <input type="text" name="montantcredit"  class="form-control" required>
                        </div>
                        <div class="form-group">
                        Entrez votre total des revenus mensuels   <input type="text" name="revenum" class="form-control">
                        </div>
                         <div class="form-group">
                        Entrez votre total des charges mensuels   <input type="text" name="chargesm" class="form-control">
                        </div>
                        
                        <button class="btnn" name="submit" class="btn btn-sm btn-primary">Demander</button>
                    </form>
                </div>
        </div>

</div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>

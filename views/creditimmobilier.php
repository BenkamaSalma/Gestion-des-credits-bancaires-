<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/style5.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Crédit immobilier</title>

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
<div class="background">
            <p><center><font size="25" color="orange"> <strong> Crédit immobilier <br /></strong></font></center></p>
        </div>
</div>
<div class="content"><center>
 <p><font size="10" color="orange"> <strong> Crédit immobilier <br /></strong></font></p>
 <br>
<p>Un emprunt immobilier est un prêt de longue durée accordé par un établissement de crédit pour financer l'acquisition d'un logement. Plusieurs éléments doivent attirer votre attention au moment de votre recherche : le meilleur taux de crédit immobilier, le taux de l'assurance emprunteur mais aussi les conditions de l'emprunt (modularité, remboursement anticipé et pénalités, transférabilité du crédit par exemple), etc. Souscrire un crédit immobilier est un acte engageant qui s'inscrit sur le long terme : 15 ans, 20 ans voire 25 ans.</p>
<p> La durée du crédit peut s'étaler jusu'a 25 ans et le montant des mensualités sont calculés en fonction de vos capacités de remboursement. Résultat : Vous maitrisez vos dépenses mensuelles en choisissant la date de prélèvement de vos échéances.</p>
<p>
<br>
<p><font size="5" color="orange"> <strong>Acheter votre maison de rêve! <br /></strong></font></p>                            <br>


</center>
<div class="form">
      <button class="btnn"><a href="sim">Simulateur de crédit</a></button>
      <button class="btnn"><a href="login">Login pour demande de crédit</a></button>
      <button class="btnn"><a href="creditperso">Crédit personnel</a></button>
      <button class="btnn"><a href="creditetu">Crédit étudiant</a></button>
      <button class="btnn"><a href="creditauto">Crédit automobile</a></button>
      <button class="btnn"><a href="creditimmobilier">Crédit immobilier</a></button>

   </div>
</div>
</body>



</div>
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
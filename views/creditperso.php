<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/style2.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Crédit personnel</title>

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
            <p><center><font size="25" color="orange"> <strong> Crédit personnel <br /></strong></font></center></p>
        </div>
</div>
<div class="content">
<center>
 <p><font size="10" color="orange"> <strong> Crédit personnel <br /></strong></font></p>
<p>Que ce soit pour financer votre mariage, des vacances de rêve ou les études de vos enfants … quelque soit le projet qui vous tient à cœur, grâce ànotre crédit personnel vous êtes dans la possibilité aujourd’hui de le concrétiser en toute sérénité !</p><br>
<p><font size="5" color="grey"> <strong> UN PRÊT SUR MESURE POUR FINANCER VOTRE PROJET <br /></strong></font></p>
<br>

<p>Avec un montant pouvant atteindre les 300 000 dhs, vous serez dans la mesure de financer vos projets en toute sérénité sans justificatif d’achat.</p>
<br>

<p>La rapidité de traitement étant une priorité chez nous, votre demande sera traitée dès le dépôt de votre dossier,  un accord de principe vous sera donné immédiatement et un traitement de votre dossier serait effectué  dans un délai  extrêmement réduit à partir de la date de dépôt de vos pièces justificatifs auprés de notre agence .</p>
<br>


<p>Le montant financé est en votre possession après 7 jours par virement sur votre compte bancaire, par mise à disposition  ou par chèque en respectant le délai légal de rétractation.</p>
<br>
<p><font size="5" color="grey"> <strong>DES MENSUALITÉS ADAPTÉES À VOTRE CALENDRIER ET À VOTRE CAPACITÉ DE FINANCEMENT</strong></font></p>
<br>
<p>Avec une durée de remboursement flexible pouvant aller de 6 à 84 mois et une possibilité de remboursement à tout instant le crédit personnel  est extrêmement souple tout en restant sécuritaire avec un taux d’intérêt attractif et fixe et un montant calculé selon votre capacité de financement, dans le respect total de la déontologie en vigueur dans le marché financier. </p>
<br>
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
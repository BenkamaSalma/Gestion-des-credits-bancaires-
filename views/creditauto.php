<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/style3.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Crédit automobile</title>

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
            <p><center><font size="25" color="orange"> <strong> Crédit automobile <br /></strong></font></center></p>
        </div>
</div>
<div class="content"><center>
 <p><font size="10" color="orange"> <strong> Crédit automobile <br /></strong></font></p>
 <br>
<p>Acquérir  sa voiture se situe dans le top 3 des achats les plus  importants au cours d’une vie .Il s’agit d’un achat plaisir mais aussi fonctionnel, que ce soit un véhicule sport, familial ou d’une voiture secondaire, nous vous accompagnons tout au long du projet de financement de votre automobile.</p>
 <br>
<p><font size="5" color="grey"> <strong>VOUS FAITES ACQUISITION DE LA VOITURE QUI VOUS CONVIENT<br /></strong></font></p>

<p>Avec le crédit automobile vous disposez d’un budget  de financement allant jusqu’à 600.000 DHS. Vous pouvez donc acheter le véhicule de votre choix qu’il soit neuf ou d’occasion.</p>

<p><font size="5" color="grey"> <strong>VOUS BÉNÉFICIEZ  D’UNE SOLUTION DE REMBOURSEMENT  ADAPTÉE À VOTRE BUDGET <br /></strong></font></p>  <br>                                                                                          

<p>On offre une solution sur mesure extrêmement souple, sur la base de votre apport votre conseiller  vous propose le crédit automobile le plus approprié, un crédit classique, ou encore  un crédit occasion et met en place avec vous immédiatement un plan de remboursement personnalisé.</p>

<br>
<p>La durée (entre 6 à 72 mois) et le montant des mensualités sont calculés en fonction de vos capacités de remboursement. Résultat : Vous maitrisez vos dépenses mensuelles en choisissant la date de prélèvement de vos échéances.</p>
<br>
<p><font size="5" color="grey"> <strong>VOUS DISPOSEZ DE VOTRE VÉHICULE À VOTRE GUISE  <br /></strong></font></p>                            <br>

<p>Nous faisons de vous le propriétaire de votre véhicule , vous pouvez utiliser votre voiture à titre personnel ou professionnel et rembourser son crédit par anticipation sans aucun frais supplémentaire !</p>

<p><font size="6" color="orange"> <strong>AVEC LE CRÉDIT AUTO , CONDUISEZ LA VOITURE QUE VOUS VOULEZ QUAND VOUS LE VOULEZ !<br /></strong></font></p>
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
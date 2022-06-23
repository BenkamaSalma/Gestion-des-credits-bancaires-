<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/style4.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Crédit étudiant</title>

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
            <p><center><font size="25" color="orange"> <strong> Crédit étudiant<br /></strong></font></center></p>
        </div>
</div>
<div class="content"><center>
 <p><font size="10" color="orange"> <strong> Crédit étudiant <br /></strong></font></p>
 
 <p>Vous souhaitez poursuivre vos études mais vous n'avez pas des revenus suffisants ou réguliers : sachez que les établissements bancaires peuvent vous consentir un prêt pour financer vos études.</p>
 <br>
 <p>Le prêt étudiant n'est pas seulement destiné à financer les frais d'inscription et de scolarité. Il peut aussi financer l'achat de matériel (ordinateur...) ou règler les dépenses de la vie courante (loyer, frais de nourriture, voiture...).</p>
<p> 
<p>Pour obtenir un prêt étudiant, vous devez être majeur (18 ans) et en général avoir moins de 30 ans. Des dérogations sont parfois accordées aux étudiants plus âgés.</p>
 
<p>Vous devez prouver votre situation en produisant une carte d'étudiant, un certificat de scolarité ou une attestation d'inscription dans votre école ou votre université.</p>
 
 
<p>La banque exige parfois que vous souscriviez une assurance décès-invalidité. Mais vous pouvez souscrire cette assurance auprès de l'organisme de votre choix.</p>
 
<p>La banque demande souvent qu'une personne (parent, autre...) se porte caution surtout si le montant du prêt est important. En cas de difficultés de remboursement, la banque pourra alors se retourner contre la caution pour qu'elle rembourse le crédit à votre place.</p>
<p>Le montant d'un prêt étudiant varie souvent de 8000 Dhs à 50 000Dhs selon les établissements bancaires. Il peut parfois aller au-delà.<br>
Le montant du prêt est déterminé selon vos besoins, mais il peut aussi varier en fonction de la durée des études, de l'école choisie, notamment des possibilités de remboursement une fois entré dans la vie active.
<p><font size="6" color="orange"> <strong>Faites vos études où vous voulez!<br /></strong></font></p>
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
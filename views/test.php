<?php 
  if(isset($_POST['find'])){
    $data = new TypeofloansController();
    $loan = $data->findLoan();
  }else{
    $data = new TypeofloansController();
    $loan = $data->getAllLoans();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin page| S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/test.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>R&S</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="adminpage" class="active"><span class="fa fa-home"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="loans"><span class="fa fa-tasks"></span><span>Les types de crédits</span></a>
        </li>
        <li>
          <a href="applications"><span class="fa fa-th-large"></span><span>Les demandes de crédits</span></a>
        </li>
        <li>
          <a href="demandeaccepte"><span class="fa fa-line-chart"></span><span>Les crédits accéptés</span></a>
        </li>
        <li>
          <a href="client"><span class="fa fa-address-book"></span><span>Les clients</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

      <div class="search-wrapper">
        <span class="fa fa-search"></span>
        <input type="search" name="" placeholder="recherche" />
      </div>

      <div class="user-wrapper" id="dropdown">
        <div>
          <small>Admin</small>
        </div>
        
        <img src="public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin">Deconnexion</a></p>
        </div>
        
      </div>
    </header>

    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h2><?php 
            $request= 'SELECT * FROM loantypes  ';
            $reslt = DB::connect()->prepare($request);
            $reslt->execute();
            $count = $reslt->rowCount();
            echo $count;
             ?></h2>
            <small>Les Types de crédits disponibles</small>
          </div>
          <div>
            <span class="fa fa-shopping-cart"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h2><?php 
            $request= 'SELECT * FROM demandecredit  ';
            $reslt = DB::connect()->prepare($request);
            $reslt->execute();
            $count = $reslt->rowCount();
            echo $count;
             ?></h2>
            <small>Le nombre de demande efféctuées</small>
          </div>
          <div>
            <span class="fa fa-newspaper-o"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h2><?php 
            $request= 'SELECT * FROM demandecredit WHERE etatcredit="validée" ';
            $reslt = DB::connect()->prepare($request);
            $reslt->execute();
            $count = $reslt->rowCount();
            echo $count;
             ?></h2>
            <small>Le nombre de crédits validées</small>
          </div>
          <div>
            <span class="fa fa-outdent"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h2><?php 
            $request= 'SELECT * FROM client  ';
            $reslt = DB::connect()->prepare($request);
            $reslt->execute();
            $count = $reslt->rowCount();
            echo $count;
             ?>
            
        </h2>
            <small>Clients</small>
          </div>
          <div>
            <span class="fa fa-group"></span>
          </div>
        </div>
      </div>

      <div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes des crédits disponibles</h2>
              <button class="button"><a href="loans">voir plus</a><span class="fa fa-arrow-right"></span></button>
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Type d crédit</td>
                      <td>Montant </td>
                      <td>durée</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($loan as $cl):?>
                    <tr>
                      <td><?php echo $cl['loanType']; ?></td>
                      <td><?php echo $cl['montant'];?></td>
                      <td><span class="status-produit color-one"></span><?php echo $cl['periode'];?></td>
                    </tr>
                    <tr>
                      <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



        
    
      

      <div class="calendar">
      <div class="mois-annee">
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li>JUIN<br><span>2022</span></li>
        </ul>
      </div>

      <ul class="mois">
        
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
        <li>Mo</li>
        <li>Tu</li>
      </ul>

      <ul class="jours">
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li><span class="active">6</span></li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30<li>
      </ul>
      </div>
    </main>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin page | LOAN MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/styleadminpage.css">
</head>
<body>
<header role="banner">
  <h1>Admin Page</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="choicelogin">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="adminpage">Dashboard</a></li>
    <li class="edit"><a href="loans">Type of loans</a></li>
    <li class="edit"><a href="applications">Loan Applications</a></li>
    <li class="edit"><a href="demandeaccepte">Loans Accepted</a></li>
    <li class="write"><a href="client">Clients</a></li>
    
    <li class="users"><a href="managers">Managers</a></li>
    <li class="comments"><a href="loans">Settings</a></li>
  </ul>
</nav>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">
      <div class="card-list">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card blue">
              <div class="title">all projects</div>
              <i class="zmdi zmdi-upload"></i>
              <div class="value">89</div>
              <div class="stat"><b>13</b>% increase</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card green">
              <div class="title">team members</div>
              <i class="zmdi zmdi-upload"></i>
              <div class="value">5,990</div>
              <div class="stat"><b>4</b>% increase</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card orange">
              <div class="title">total budget</div>
              <i class="zmdi zmdi-download"></i>
              <div class="value">$80,990</div>
              <div class="stat"><b>13</b>% decrease</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card red">
              <div class="title">new customers</div>
              <i class="zmdi zmdi-download"></i>
              <div class="value">3</div>
              <div class="stat"><b>13</b>% decrease</div>
            </div>
          </div>
        </div>
      </div>

   </body>
</html>
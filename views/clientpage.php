
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client page | LOAN MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" href="http://127.0.0.1/final/public/assets/clientstyle.css">
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
            
          
          <h1> Hello <?php  echo $_SESSION['username'];
          
                    ?> </h1>
                   

                <div class="form">
                    <button class="btnn"><a href="demandecredit">Apply for loan here</a></button>
                    <button class="btnn"><a href="demande">View my loan appliances</a></button>
                    <button class="btnn"><a href="approvedloans">View my approaved loans</a></button>
                    <button class="btnn"><a href="rejectedloans">View my rejected loans</a></button>
                    <button class="btnn"><a href="profile">view my profile</a></button>
                    <button class="btnn"><a href="upload">Upload proof document</a></button>
                    <button class="btnn"><a href="docuploaded">documents uploaded</a></button>
                    <!--<form method="post" action ="profile" >
                        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">                        <input type="submit" name ="submit" class="btnn">view my profile >
                                </form>-->
        </div>
    </div>
</div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>

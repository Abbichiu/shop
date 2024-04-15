<?php
session_start();
// Establish a database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
//include header navbar elements
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/cloth-store-icon.png" />
        <title>Shopping System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
          
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Pretty,Cozy, Modern style.</h1>
                       <p>Buy three items for free shipping.</p>
                       <a href="/Shop/Shop/products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="/Shop/Shop/products.php">
                                <img src="img/woman.jpg" alt="woman">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Miss</p>
                                        <p>Discover your new-signature style.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="/Shop/Shop/products.php">
                               <img src="img/man.jpg" alt="man">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Mr.</p>
                                    <p>Original clothes from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="/Shop/Shop/products.php">
                               <img src="img/arrivals.jpg" alt="new_arrivals">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">News</p>
                                   <p>Invest in morden classic from new designs.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>If you have problems, feel free to contact us</p>
                   <p>contact: shop2024@gmail.com</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
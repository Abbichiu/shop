<?php
    session_start();
    // Establish a database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
//include header navbar elements
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/header.php');
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $user_id = $_GET['id'];
   
   
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/cloth-store-icon.png />
        <title>Lifestyle Store</title>
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
       
           
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Dress Up Store</h1>
                    <p>let's create your own fashion style .</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="/Shop/Shop/product.php?item_id=1&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth1.jpg" alt="cloth1">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Japan Ruffle Top</h3>
                                    <p>Price: $189</p>
                                    
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=2&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth2.jpg" alt="cloth2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Hielf  Crochet Off Shoulder Top</h3>
                                    <p>Price: $159</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=3&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth3.jpg" alt="cloth3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Rowen Pleat midi skirt</h3>
                                    <p>Price: $209</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=4&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth4.jpg" alt="cloth4">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Zeta Rubber Waist Skirt</h3>
                                    <p>Price: $229</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=5&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth5.jpg" alt="cloth5">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>FLARE BUTTON CARGO SKIRT</h3>
                                    <p>Price: $249</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=6&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth6.jpg" alt="cloth6">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>BRIELLA BODYCON SPILT DRESS II</h3>
                                    <p>Price: $279</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=7&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth7.JPG" alt="cloth7">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>BRIELLA BODYCON SPILT BLUE DRESS II</h3>
                                    <p>Price: $279</p>
                                   
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=8&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth8.jpg" alt="cloth8">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Stonewashed Cotton and Linen-Blend Chambray Shirt/h3>
                                    <p>Price: $239</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=9&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth9.jpg" alt="cloth9">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Raglan Full-Grain Leather Holdall</h3>
                                    <p>Price: $358</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=10&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth10.jpg" alt="cloth10">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Marbot Aviator-Style Silver-Tone and Acetate Sunglasses</h3>
                                    <p>Price: $1050</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=11&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth11.jpg" alt="cloth11">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Tranquility Cashmere Sweater</h3>
                                    <p>Price: $258</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <a href="/Shop/Shop/product.php?item_id=12&email=<?php echo $email; ?>&user_id=<?php echo $user_id; ?>">
                                <img src="img/cloth12.jpg" alt="cloth12">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bootcut Jeans</h3>
                                    <p>Price: 508</p>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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




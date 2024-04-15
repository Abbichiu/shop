<?php
session_start();
// Establish a database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
// Include header navbar elements
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/header.php');

if (isset($_GET['id']) && isset($_GET['item_id'])) {
    $user_id = $_GET['id'];
    $item_id = $_GET['item_id'];
    $email = $_GET['email'];
    // Retrieve the item details from the database based on $item_id
    // ...

    // Store the selected item in the session
    $_SESSION['selected_item'] = array(
        'id' => $item_id,
        'name' => $item_name,
        'price' => $item_price
    );

    // Redirect to addcart.php to insert the values into the database
    header('location: /Shop/Shop/addcart.php?user_id=' . $user_id);
    exit();
} elseif (isset($_GET['id'])) {
    $user_id = $_GET['user_id'];

    // Check if the selected_item is stored in the session
    if (isset($_SESSION['selected_item'])) {
        $selectedItem = $_SESSION['selected_item'];

        $itemId = $selectedItem['id'];
        $itemName = $selectedItem['name'];
        $itemPrice = $selectedItem['price'];
        ?>

        <html>
        <head>
            <link rel="shortcut icon" href="img/lifestyleStore.png" />
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
        <div class="container">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Item ID: <?php echo $itemId; ?></th>
                        <th>Item Name: <?php echo $itemName; ?></th>
                        <th>Item Price: <?php echo $itemPrice; ?></th>
                    </tr>
                </tbody>
            </table>
            <a href="/Shop/Shop/removecart.php?id=<?php echo $itemId; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-success">Remove from cart</a>
<a href="/Shop/Shop/addcart.php?id=<?php echo $itemId; ?>&id=<?php echo $itemId; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-success">Add to Cart</a>
<a href="/Shop/Shop/checkout.php?id=<?php echo $itemId; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-success">Check out</a>
<a href="/Shop/Shop/products.php?id=<?php echo $user_id; ?>&email=<?php echo $email; ?>" class="btn btn-success">Back to shop</a>
        </div>
        
        <?php
    } else {
        // Handle the case when the selected_item is not set
        echo "No item selected.";
    }
} else {
    // Handle the case when the user ID is not provided
    echo "Invalid user ID.";
}
?>


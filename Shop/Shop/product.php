<?php
    session_start();
    // Establish a database connection
    include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
    
    

    if (isset($_GET['item_id'])) {
        $item_id = $_GET['item_id'];
        $email = $_GET['email'];
        $user_id = $_GET['user_id'];
       
        // Retrieve item details from the database
        $query = "SELECT id, name, price FROM items WHERE id = $item_id";
        $result = mysqli_query($conn, $query);
        $item = mysqli_fetch_assoc($result);
        
        // Store item details in session for further processing
        $_SESSION['selected_item'] = $item;
        
        // Redirect to the other PHP file for calculating the total price
        header("Location: /Shop/Shop/cart.php?id=$item_id&user_id=$user_id&email=$email");
        exit();
    }

?>
<!-- Rest of the HTML code remains unchanged -->
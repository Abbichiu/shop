<?php
session_start();
// Establish a database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
// Include header navbar elements
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/header.php');

// Check if the user ID and item ID are provided
if (isset($_GET['user_id']) && isset($_GET['id'])) {
    $user_id = $_GET['user_id'];
    $item_id = $_GET['id'];

    // Check if the selected_item is stored in the session
    if (isset($_SESSION['selected_item'])) {
        $selectedItem = $_SESSION['selected_item'];

        $itemName = $selectedItem['name'];
        $itemPrice = $selectedItem['price'];

        // Assign the value of $item_id to $itemId
        $itemId = $item_id;

        // Perform the database query to delete item details from user_items table
        $query = "DELETE FROM user_items WHERE item_id = '$itemId' AND user_id = '$user_id'";

        // Output the query for debugging purposes
        echo "Query: $query<br>";

        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
            // Display success message
            echo "<script>alert('Item removed from cart successfully.');</script>";
            header("Location: /Shop/Shop/products.php?id=$user_id&email=$email");
            exit();
        } else {
            // Handle the case when the query fails
            echo "<script>alert('Failed to remove item from cart.');</script>";
            // Output the error message for debugging purposes
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle the case when the selected_item is not set
        echo "<script>alert('No item selected.');</script>";
    }
} else {
    // Handle the case when the user ID or item ID is not provided
    echo "<script>alert('Invalid user ID or item ID.');</script>";
}
?>
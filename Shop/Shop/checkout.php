<?php
session_start();
// Establish a database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');
// Include header navbar elements
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/header.php');

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Check if the selected_item is stored in the session
    if (isset($_SESSION['selected_item'])) {
        $selectedItem = $_SESSION['selected_item'];

        $itemId = $selectedItem['id'];
        $itemName = $selectedItem['name'];
        $itemPrice = $selectedItem['price'];

        // Perform calculations on the item price
        // ...

        // Retrieve all selected items from the user_items table along with the item name
        $query = "SELECT user_items.*, items.name AS item_name 
                  FROM user_items 
                  JOIN items ON user_items.item_id = items.id 
                  WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful and if any items were selected
        if ($result && mysqli_num_rows($result) > 0) {
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
                <h1>Checkout</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Create an array to store the item prices
                            $itemPrices = array();

                            // Iterate through each selected item and display it in a table row
                            while ($row = mysqli_fetch_assoc($result)) {
                                $itemId = $row['item_id'];
                                $itemName = $row['item_name'];
                                $itemPrice = $row['item_price'];

                                echo "<tr>";
                                echo "<td>$itemId</td>";
                                echo "<td>$itemName</td>";
                                echo "<td>$itemPrice</td>";
                                echo "</tr>";

                                // Check if the item ID already exists in the itemPrices array
                                if (array_key_exists($itemId, $itemPrices)) {
                                    // Calculate the price for the current item and add it to the existing price
                                    $itemPrices[$itemId] += $itemPrice;
                                } else {
                                    // Add the item ID to the itemPrices array with initial price value
                                    $itemPrices[$itemId] = $itemPrice;
                                }
                            }
                        ?>
                    </tbody>
                </table>

                <!-- Calculate the total price based on itemPrice and any additional charges -->
                <?php
                    // Calculate the total price
                    $totalPrice = array_sum($itemPrices);
                    echo "<p>Total Price: $totalPrice</p>";
                ?>
                <a href="/Shop/Shop/products.php?id=<?php echo $user_id; ?>&email=<?php echo $email; ?>" class="btn btn-success">Back to shop</a>
                <!-- Proceed with the checkout process -->
                <!-- ... -->
            </div>
            </body>
            </html>
            <?php
        } else {
            // Handle the case when no items are selected
            echo "No items selected.";
        }
    } else {
        // Handle the case when the selected_item is not set
        echo "No item selected.";
    }
} else {
    // Handle the case when the user ID is not provided
    echo "Invalid user ID.";
}
?>
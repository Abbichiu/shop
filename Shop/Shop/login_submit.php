<?php
session_start();

// Include the database connection
include('/Applications/XAMPP/xamppfiles/htdocs/Shop/Shop/config/db.php');

// Get the email and password from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate email format
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        echo "Incorrect email. Redirecting you back to the login page...";
        header("refresh:2;url=/Shop/Shop/login.php");
        exit;
    }

    // Validate password length
    if (strlen($password) < 6) {
        echo "Password should have at least 6 characters. Redirecting you back to the login page...";
        header("refresh:2;url=/Shop/Shop/login.php");
        exit;
    }

    // Query the database for the user
    $user_authentication_query = "SELECT id, email, password FROM users WHERE email=?";
    $stmt = mysqli_prepare($conn, $user_authentication_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if a user was found
    if (mysqli_num_rows($result) == 0) {
        // No user found
        // Redirect to the same login page with error message
        echo "<script>window.alert('Wrong username or password');</script>";
        header("refresh:1;url=/Shop/Shop/login.php");
        exit;
    } elseif (mysqli_num_rows($result) == 1) {
        // User found
        $row = mysqli_fetch_array($result);
        $storedPassword = $row['password'];

        // Compare the stored password with the user input password
        if ($password === $storedPassword) {
            // User authentication successful
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id']; // User ID
            $id = $row['id'];
            header("location: /Shop/Shop/products.php?id=$id&email=$email");
            exit;
        } else {
            // Incorrect password
            // Redirect to the same login page with error message
            echo "<script>window.alert('Wrong username or password');</script>";
            header("refresh:1;url=/Shop/Shop/login.php");
            exit;
        }
    }
}
?>
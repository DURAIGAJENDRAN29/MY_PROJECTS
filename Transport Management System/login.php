<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your credentials (you should store them securely, not hardcode in the script)
    $username = "your_username";
    $password = "your_password";

    // Retrieve user input
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Validate user credentials
    if ($input_username == $username && $input_password == $password) {
        // Authentication successful
        echo "Login successful!";
        // You can redirect to another page or perform additional actions here
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?> 
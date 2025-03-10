<?php

// This file handles the validation of login credentials

// Include the database connection file
require_once('jpcDatabase.php');

// Retrieve and sanitize email from the login form
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];

// Validate email format using filter_var()
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
    // Get the database connection
    $db = getDB();

    // Prepare the SQL query to validate login credentials
    $query = "SELECT firstName, lastName, pronouns FROM jpcManagers " . 
             "WHERE emailAddress = ? AND password = SHA2(?, 256)";

    // Prepare and execute the statement
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss", $emailAddress, $password);
    $stmt->execute();
    $stmt->bind_result($firstName, $lastName, $pronouns);
    $fetched = $stmt->fetch();
    $name = "$firstName $lastName";

    // Check if login was successful
    if ($fetched && isset($name)) {
        // If login is successful, store user data in session variables
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['pronouns'] = $pronouns;
        $_SESSION['emailAddress'] = $emailAddress;
        $_SESSION['login'] = true;
        
        // Display welcome message
        echo "<h3>Welcome to JPC Inventory Manager, $name!</h3>\n";
        
        // Redirect to the main page
        header("Location: jpcIndex.php");
    } else {
        // If login fails, display error message
        echo "<h1>Japan Collectors</h1>\n";
        echo "<h3>Invalid email or password.</h3>\n";
        echo "<a href=\"jpcIndex.php\">Please Try Again</a>\n";
    }
} else {
    // If email format is invalid
    echo "<h1>Japan Collectors</h1>\n";
    echo "<h3>Please enter a valid email address.</h3>\n";
    echo "<a href=\"jpcIndex.php\">Please Try Again</a>\n";
}
?>

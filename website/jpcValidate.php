<?php
// Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// This file handles the validation of login credentials

// Include the database connection file
require_once('jpcDatabase.php');

// Retrieve email and password from the login form
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];

// Get the database connection
$db = getDB();

// Prepare the SQL query to validate login credentials
// The query selects firstName, lastName, and pronouns from jpcManagers table
// It checks if the provided email and hashed password match a record
$query = "SELECT firstName, lastName, pronouns FROM jpcManagers " . 
         "WHERE emailAddress = ? AND password = SHA2(?, 256)";

// Prepare and execute the statement
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();

// Check if login was successful
if ($fetched && isset($firstName)) {
    // If login is successful, store user data in session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['emailAddress'] = $emailAddress;
    $_SESSION['login'] = true;
    
    // Display welcome message
    echo "<h3>Welcome to JPC Inventory Manager, $firstName $lastName!</h3>\n";
    
    // Redirect to the main page
    header("Location: jpcIndex.php");
} else {
    // If login fails, display error message
    echo "<h1>Japan Collectors</h1>\n";
    echo "<h3>Invalid email or password.</h3>\n";
    
    // Provide a link to try logging in again
    echo "<a href=\"jpcIndex.php\">Please Try Again</a>\n";
}
?>

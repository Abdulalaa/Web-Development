<?php
//Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// Call to db and validate login credentials

// Call db file
require_once('jpcDatabase.php');

// Retreive email/password from login form and assign to vars
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];

$db = getDB();

// Validate login credentials
$query = "SELECT firstName, lastName, pronouns FROM jpcManagers " . 
         "WHERE emailAddress = ? AND password = SHA2(?, 256)";

$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
// Check for success
if ($fetched && isset($firstName)) {
    // Login successful, store user data in session
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['emailAddress'] = $emailAddress;
    $_SESSION['login'] = true;
    echo "<h3>Welcome to JPC Inventory Manager, $firstName $lasName!</h3>\n";
    header("Location: jpcIndex.php");
} else {
    // Login failed, display error message
    echo "<h1>Japan Collectors</h1>\n";
    echo "<h3>Invalid email or password.</h3>\n";
    // Redirect to try login again
    echo "<a href=\"jpcIndex.php\">Please Try Again</a>\n";
}
?>


<?php
// Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// This file handles the main page content, showing either a login form or a welcome page

// Check if the user is not logged in
if (!isset($_SESSION['login'])) {
    // If not logged in, display the login form
?>

    <!-- HTML for the login form -->
    <h1>Please Login to Japan Collectors!</h1>
    <br>
    <br>
    <h2>Please Log In to JPC:</h2>
    <form name="login" action="jpcIndex.php" method="post">
        <!-- Email input field -->
        <label>Email:</label>
        <input type="email" name="emailAddress" size="25" required>
        <br>
        <br>
        <!-- Password input field -->
        <label>Password:</label>
        <input type="password" name="password" size="25" required>
        <br>
        <br>
        <!-- Submit button for the form -->
        <input type="submit" value="LOGIN">
        <!-- Hidden input to specify the content to load after form submission -->
        <input type="hidden" name="content" value="jpcValidate">
    </form>
<?php
} else {
    // If the user is already logged in, display the welcome page
    // Show a personalized welcome message using session variables
    echo "<h1>Welcome to Japan Collectors, {$_SESSION['firstName']} {$_SESSION['lastName']}  ({$_SESSION['pronouns']})</h1>";
    echo "<h2> Inventory Manager:</h2>"
?>
    <br>
    <h4>This is your category and item inventory management program</h3>
    <br>
    <br>
<?php
}
?>
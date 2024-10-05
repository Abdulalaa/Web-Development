<?php
//Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// User login form if not logged in / user Welcome page if logged in

//Check if user not logged in
if (!isset($_SESSION['login'])) {
?>
    <!-- Display html login form  -->
    <h1>Please Login to Japan Collectors!</h1>
    <br>
    <br>
    <h2>Please Log In to JPC:</h2>
    <form name="login" action="jpcIndex.php" method="post">
        <label>Email:</label>
        <input type="text" name="emailAddress" size="25">
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" size="25">
        <br>
        <br>
        <input type="submit" value="LOGIN">
        <input type="hidden" name="content" value="jpcValidate">
    </form>
<?php
} else {
    // User logged in already, display Welcome Page
    echo "<h1>Welcome to Japan Collectors, {$_SESSION['firstName']} {$_SESSION['lastName']}  ({$_SESSION['pronouns']})</h1>";
    echo "<h2> Inventory Manager:</h2>"
?>
    <br><br>
    <h4>This is your category and item inventory management program</h3>
    <br>
    <br>
    <h5>Logout of JPC Inventory Manager:</h5>
    <a href="jpcIndex.php?content=jpcLogout"><strong>LOGOUT</strong></a>
<?php
}
?>
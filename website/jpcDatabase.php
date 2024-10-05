<?php 
// Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// File to connect code to sql server/database 
// Other files will use 'require_once(jpcDatabase.php)' to connect

// db connection function
function getDB()
{
    // Data field/Connection Parameters
    $host = 'sql1.njit.edu';
    $username = 'aaa';
    $password = 'Academic@database1';
    $dbname = 'aaa';
    $port = 3306;

    // Error Checking/Reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Try/Catch establishing connection to database
    try {
        $db = new mysqli($host, $username, $password, $dbname, $port);
        // Success log
        error_log("Connection to $host database successful\n");
        return $db;
    } catch (mysqli_sql_exception $e) {
        // Failure log
        error_log($e->getMessage(), 0);
        echo $e->getMessage();
    }
} // End of jpcDatabase.php
?>



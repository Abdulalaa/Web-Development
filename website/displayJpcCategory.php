<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-202 Project
 * 
 * This file displays the details of a specific category when given a valid category ID.
 * It includes error handling for invalid or missing category IDs.
 */

include("jpcCategory.php");

// Check if a valid numeric category ID was provided
if (!isset($_REQUEST['jpcCategoryID']) or (!is_numeric($_REQUEST['jpcCategoryID']))) {
?>
    <h2>You did not select a valid Category ID to view.</h2>
    <a href="index.php?content=listJpcCategory">List Categories</a>
<?php
} else {
    // Get the category ID from the request
    $jpcCategoryID = $_REQUEST['jpcCategoryID'];
    
    // Attempt to find the category in the database
    $category = jpcCategory::findCategory($jpcCategoryID);
    
    // Display category if found, otherwise show error message
    if ($category) {
        echo $category;
        echo "<br><br>\n";
    } else {
        echo "<h2>Sorry, category $jpcCategoryID not found</h2>\n";
    }
}
?>

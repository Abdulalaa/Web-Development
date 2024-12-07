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

// Validate category ID
if (!isset($_REQUEST['jpcCategoryID']) || !is_numeric($_REQUEST['jpcCategoryID'])) {
    echo "<h2>You did not select a valid Category ID value</h2>\n";
    echo '<a href="jpcIndex.php?content=listJpcCategory">List Categories</a>';
}

$jpcCategoryID = filter_var($_REQUEST['jpcCategoryID'], FILTER_VALIDATE_INT);

// Attempt to find the category in the database
$category = jpcCategory::findCategory($jpcCategoryID);

// Display category if found, otherwise show error message
if ($category) {
    echo $category;
    echo "<br><br>\n";
} else {
    echo "<h2>Sorry, category $jpcCategoryID not found</h2>\n";
}
?>

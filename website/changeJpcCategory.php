<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-202 Project
 * 
 * Processes the category update form submission.
 * Called from: updateJpcCategory.php form submission
 * Uses: jpcCategory class for database operations
 */

// Include the jpcCategory class file
include("jpcCategory.php");

// Get the category ID from the GET parameters
$jpcCategoryID = $_GET['jpcCategoryID'];

// Find the category using the static method of jpcCategory class
$category = jpcCategory::findCategory($jpcCategoryID);

// If the category is found
if ($category) {
    // Update category properties with values from GET parameters
    $category->jpcCategoryCode = $_GET['jpcCategoryCode'];
    $category->jpcCategoryName = $_GET['jpcCategoryName'];
    $category->jpcCategoryDesc = $_GET['jpcCategoryDesc'];

    // Attempt to update the category in the database
    $result = $category->updateCategory();
    
    // Check if the update was successful
    if ($result) {
        echo "<h2>Category $jpcCategoryID updated</h2>\n";
    } else {
        echo "<h2>Problem updating category $jpcCategoryID</h2>\n";
    }
} else {
    // If the category is not found, display an error message
    echo "<h2>Category $jpcCategoryID not found</h2>\n";
}
?>
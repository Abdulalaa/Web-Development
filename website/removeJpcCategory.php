<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Handles category deletion from the system.
 * Called from: Category list or detail views
 * Uses: jpcCategory class for database operations
 */


// Log the contents of $_GET for debugging purposes
error_log("\$_GET " . print_r($_GET, true));

// Include the jpcCategory class file
include("jpcCategory.php");

// Get the category ID from the GET parameters
$jpcCategoryID = $_GET['jpcCategoryID'];

// Find the category using the static method of jpcCategory class
$category = jpcCategory::findCategory($jpcCategoryID);

// Attempt to remove the category
$result = $category->removeCategory();

// Check if the removal was successful
if ($result) {
    // Display success message
    echo "<h2>Category $jpcCategoryID removed</h2>\n";
} else {
    // Display error message if removal failed
    echo "<h2>Sorry, problem occurred while removing category $jpcCategoryID</h2>\n";
}
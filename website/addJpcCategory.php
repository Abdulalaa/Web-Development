<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-202 Project
 * 
 * Processes the category creation form submission
 * Called from: newJpcCategory.php form submission
 * Uses: jpcCategory class for database operations
 */

// Include the jpcCategory class file
include("jpcCategory.php");

if (isset($_SESSION['login'])) {
    // Check if form was submitted
    if (isset($_POST['jpcCategoryID'])) {
        $jpcCategoryID = $_POST['jpcCategoryID'];
        if ((trim($jpcCategoryID) == '') || (!is_numeric($jpcCategoryID))) {
            echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
        } else {
            $jpcCategoryCode = $_POST['jpcCategoryCode'];
            $jpcCategoryName = $_POST['jpcCategoryName'];
            $jpcCategoryDesc = $_POST['jpcCategoryDesc'];
            $category = new jpcCategory($jpcCategoryID, $jpcCategoryCode, $jpcCategoryName, $jpcCategoryDesc);
            $result = $category->saveCategory();
            if ($result)
                echo "<h2>New Category #$jpcCategoryID successfully added</h2>\n";
            else
                echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    } else {
        // If no form data, show the form
        include("newJpcCategory.php");
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
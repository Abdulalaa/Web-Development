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
        $jpcCategoryID = filter_input(INPUT_POST, 'jpcCategoryID', FILTER_VALIDATE_INT);
        if ((trim($jpcCategoryID) == '') || (!is_int($jpcCategoryID))) {
            echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
        } else if(jpcCategory::findCategory($jpcCategoryID)) {
            echo "<h2>Sorry, that category ID is already in use</h2>\n";
        } else { 
            $jpcCategoryCode = htmlspecialchars(trim($_POST['jpcCategoryCode']));
            $jpcCategoryName = htmlspecialchars(trim($_POST['jpcCategoryName']));
            $jpcCategoryDesc = htmlspecialchars(trim($_POST['jpcCategoryDesc']));
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
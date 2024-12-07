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

if (isset($_SESSION['login'])) {
    $jpcCategoryID = $_POST['jpcCategoryID'];
    $answer = $_POST['answer'];
    
    if ($answer == "Update Category") {
        $category = jpcCategory::findCategory($jpcCategoryID);
        $category->jpcCategoryCode = $_POST['jpcCategoryCode'];
        $category->jpcCategoryName = $_POST['jpcCategoryName'];
        $category->jpcCategoryDesc = $_POST['jpcCategoryDesc'];
        
        $result = $category->updateCategory();
        if ($result) {
            echo "<h2>Category $jpcCategoryID updated</h2>\n";
        } else {
            echo "<h2>Problem updating category $jpcCategoryID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for category $jpcCategoryID</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
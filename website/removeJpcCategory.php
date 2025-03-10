<?php


include("jpcCategory.php");

if (isset($_SESSION['login'])) {
    if (isset($_POST['jpcCategoryID']) && is_numeric($_POST['jpcCategoryID'])) {
        $jpcCategoryID = filter_var($_POST['jpcCategoryID'], FILTER_VALIDATE_INT);
        
        // Find the category
        $category = jpcCategory::findCategory($jpcCategoryID);

        // Verify category exists
        if ($category) {
            // Attempt to remove the category
            $result = $category->removeCategory();

            if ($result) {
                echo "<h2>Category $jpcCategoryID removed</h2>\n";
            } else {
                echo "<h2>Sorry, problem occurred while removing category $jpcCategoryID</h2>\n";
            }
        } else {
            echo "<h2>Category $jpcCategoryID not found</h2>\n";
        }
    } else {
        echo "<h2>Invalid category ID provided</h2>\n";
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
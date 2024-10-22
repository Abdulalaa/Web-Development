<?php
include("jpcCategory.php");
$jpcCategoryID = $_GET['jpcCategoryID'];
if ((trim($jpcCategoryID) == '') or (!is_numeric($jpcCategoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
    $jpcCategoryCode = $_GET['jpcCategoryCode'];
    $jpcCategoryName = $_GET['jpcCategoryName'];
    $jpcCategoryDesc = $_GET['jpcCategoryDesc'];
    $category = new jpcCategory($jpcCategoryID, $jpcCategoryCode, $jpcCategoryName, $jpcCategoryDesc);
    $result = $category->saveCategory();
    if ($result) {
        echo "<h2>New Category #$jpcCategoryID successfully added</h2>\n";
        echo "<h2>$category</h2>\n";
    } else {
        echo "<h2>Sorry, unable to add new category</h2>\n"; 
    }
}
?> 
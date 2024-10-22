<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
include("jpcCategory.php");
$jpcCategoryID = $_GET['jpcCategoryID'];
$category = jpcCategory::findCategory($jpcCategoryID);
$category->jpcCategoryCode = $_GET['jpcCategoryCode'];
$category->jpcCategoryName = $_GET['jpcCategoryName'];
$category->jpcCategoryDesc = $_GET['jpcCategoryDesc'];
$result = $category->updateCategory();
if ($result) {
    echo "<h2>Category $jpcCategoryID updated</h2>\n";
} else {
    echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>
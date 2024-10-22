<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
error_log("\$_GET " . print_r($_GET, true));
include("jpcCategory.php");
$jpcCategoryID = $_GET['jpcCategoryID'];
$category = jpcCategory::findCategory($jpcCategoryID);
$result = $category->removeCategory();
if ($result)
    echo "<h2>Category $jpcCategoryID removed</h2>\n";
else
    echo "<h2>Sorry, problem occured while removing category $jpcCategoryID</h2>\n";
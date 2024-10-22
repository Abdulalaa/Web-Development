<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
include("jpcCategory.php");
$categories = jpcCategory::getCategories();
echo "<h2>Current Categories:</h2>\n";

if ($categories) {
    foreach ($categories as $category) {
        $jpcCategoryID = $category->jpcCategoryID;
        $name = $jpcCategoryID . " - " . $category->jpcCategoryCode . " - " . $category->jpcCategoryName;
        echo "$name<br>";
    }
} else {
    echo "<h2>No categories found.</h2>\n";
}
?>
<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Displays a list of categories in a dropdown select menu.
 * Called from: Category management views
 * Uses: jpcCategory class for data retrieval
 */

// Include the jpcCategory class file
include("jpcCategory.php");

// Get all categories using the static method of jpcCategory class
$categories = jpcCategory::getCategories();
?>

<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="jpcCategoryID" size="20">
       <?php
       // Loop through each category and display its details
       foreach ($categories as $category) {
           $jpcCategoryID = $category->jpcCategoryID;
           $name = $jpcCategoryID . " - " . $category->jpcCategoryCode . ", " . $category->jpcCategoryName;
           echo "<option value=\"$jpcCategoryID\">$name</option>\n";
       }
       ?>
   </select>
</form>
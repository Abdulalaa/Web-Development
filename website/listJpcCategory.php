<script language="JavaScript">
    function listbox_dblclick() {
        document.jpcCategory.displayJpcCategory.click();
    }
    function button_click(target) {
        let userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to delete this category?");
        }
        if (userConfirmed) {
            if (target == 0) jpcCategory.action = "jpcIndex.php?content=displayJpcCategory";
            if (target == 1) jpcCategory.action = "jpcIndex.php?content=removeJpcCategory";
            if (target == 2) jpcCategory.action = "jpcIndex.php?content=updateJpcCategory";
        }
        else {
            alert("Action cancelled");
        }
    }
</script>

<?php
/**
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
<form name="jpcCategory" method="post">
   <select ondblclick="listbox_dblclick()" name="jpcCategoryID" size="20">
       <?php
       // Loop through each category and display its details
       foreach ($categories as $category) {
           $jpcCategoryID = $category->jpcCategoryID;
           $name = $jpcCategoryID . " - " . $category->jpcCategoryCode . ", " . $category->jpcCategoryName;
           echo "<option value=\"$jpcCategoryID\">$name</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displayJpcCategory" value="Display">
   <input type="submit" onClick="button_click(1)" name="deleteJpcCategory" value="Delete">
   <input type="submit" onClick="button_click(2)" name="updateJpcCategory" value="Update">
</form>
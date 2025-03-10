<?php


// Add this line at the top to include the category class
include("jpcCategory.php");

// CSS styles for the update category form
?>
<style>
   form[name="updateJpcCategory"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   /* Aligns form labels to the left */
   form[name="updateJpcCategory"] label {
       text-align: left;
       padding-right: 5px;
   }
   /* Makes text inputs fill their grid cell */
   form[name="updateJpcCategory"] input[type="text"] {
       width: 100%;
   }
   /* Places submit buttons in second column aligned left */
   form[name="updateJpcCategory"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
// Get category ID from POST data
$jpcCategoryID = $_POST['jpcCategoryID'];
// Try to find the category in database
$category = jpcCategory::findCategory($jpcCategoryID);
// If category exists, show update form
if ($category) {
?>
   <!-- Display heading with category ID -->
   <h2>Update Category <?php echo $jpcCategoryID; ?></h2><br>
   <!-- Form that submits to jpcIndex.php -->
   <form name="updateJpcCategory" action="jpcIndex.php" method="post">
       <!-- Category code input field -->
       <label for="jpcCategoryCode">Category Code:</label>
       <input type="text" name="jpcCategoryCode" id="jpcCategoryCode" value="<?php echo $category->jpcCategoryCode; ?>">
       <!-- Category name input field -->
       <label for="jpcCategoryName">Category Name:</label>
       <input type="text" name="jpcCategoryName" id="jpcCategoryName" value="<?php echo $category->jpcCategoryName; ?>">
       <!-- Category description input field -->
       <label for="jpcCategoryDesc">Description:</label>
       <input type="text" name="jpcCategoryDesc" id="jpcCategoryDesc" value="<?php echo $category->jpcCategoryDesc; ?>">
       <!-- Submit buttons for update and cancel -->
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <!-- Hidden fields to pass category ID and content type -->
       <input type="hidden" name="jpcCategoryID" value="<?php echo $jpcCategoryID; ?>">
       <input type="hidden" name="content" value="changeJpcCategory">
   </form>
<?php
} else {
?>
   <!-- Show error if category not found -->
   <h2>Sorry, category <?php echo $jpcCategoryID; ?> not found</h2>
<?php
}
?>
<!-- JavaScript to focus and select category code field on load -->
<script language="javascript">
   document.updateJpcCategory.jpcCategoryCode.focus();
   document.updateJpcCategory.jpcCategoryCode.select();
</script>

<?php
/**
 * Form for entering new category information.
 * Called from: Category management menu
 * Submits to: addJpcCategory.php for processing
 */
?>
<h2>Enter New Category Information</h2>
<form name="newJpcCategory" action="jpcIndex.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="jpcCategoryID" size="4" min="100" max="999" 
                minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Category Code:</td>
            <td><input type="text" name="jpcCategoryCode" size="20" 
                placeholder="Enter a unique code" minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Category Name:</td>
            <td><input type="text" name="jpcCategoryName" size="50" 
                minlength="10" maxlength="100" required></td>
        </tr>
        <tr>
            <td>Category Description:</td>
            <td><input type="text" name="jpcCategoryDesc" size="50" 
                minlength="20" maxlength="200" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Category">
    <input type="hidden" name="content" value="addJpcCategory">
</form>

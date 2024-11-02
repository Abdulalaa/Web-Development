<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Form for entering new product information.
 * Called from: Product management menu
 * Submits to: addJpcProduct.php for processing
 */
?>
<h2>Enter New Product Information</h2>
<form name="newJpcProduct" action="jpcIndex.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>Product ID:</td>
            <td><input type="text" name="jpcProductID" size="4"></td>
        </tr>
        <tr>
            <td>Product Code:</td>
            <td><input type="text" name="jpcProductCode" size="10"></td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="jpcProductName" size="50"></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="jpcProductDescription" size="50"></td>
        </tr>
        <tr>
            <td>Year:</td>
            <td><input type="number" name="jpcProductYear" size="4"></td>
        </tr>
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="jpcCategoryID" size="4"></td>
        </tr>
        <tr>
            <td>Wholesale Price:</td>
            <td><input type="number" name="jpcWholesalePrice" size="10"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="number" name="jpcListPrice" size="10"></td>
        </tr>
    </table><br>
    <input type="submit" value="Add New Product">
    <input type="hidden" name="content" value="addJpcProduct">
</form>

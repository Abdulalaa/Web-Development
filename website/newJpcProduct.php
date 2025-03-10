<?php
/**
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
            <td><input type="number" name="jpcProductID" size="4" min="1000" max="9999"
                minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Product Code:</td>
            <td><input type="text" name="jpcProductCode" size="20" 
                placeholder="Enter a unique code" minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="jpcProductName" size="50" 
                minlength="1" maxlength="100" required></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="jpcProductDescription" size="50" 
                minlength="1" maxlength="255" required></td>
        </tr>
        <tr>
            <td>Year:</td>
            <td><input type="number" name="jpcProductYear" size="4" 
                min="1600" max="2100" required></td>
        </tr>
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="jpcCategoryID" size="4" 
                min="100" max="999" minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Wholesale Price:</td>
            <td><input type="number" name="jpcWholesalePrice" size="10" 
                min="0.01" max="99999.99" step="0.01" required></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="number" name="jpcListPrice" size="10" 
                min="0.01" max="99999.99" step="0.01" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Product">
    <input type="hidden" name="content" value="addJpcProduct">
</form>

<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Handles the product update form display.
 * Called from: jpcNav.php (search form) or listJpcProduct.php
 * Submits to: changeJpcProduct.php
 */

include("jpcProduct.php");

// Validate product ID input
if (!isset($_POST['jpcProductID']) or (!is_numeric($_POST['jpcProductID']))) {
?>
    <h2>You did not select a valid Product ID value</h2>
    <a href="jpcIndex.php?content=listJpcProduct">List Products</a>
    <?php
} else {
    // Find the product to update
    $jpcProductID = $_POST['jpcProductID'];
    $product = jpcProduct::findProduct($jpcProductID);
    
    if ($product) {
        // Display update form with current product values
    ?>
        <h2>Update Product <?php echo $product->jpcProductID; ?></h2><br>
        <form name="updateJpcProduct" action="jpcIndex.php" method="post">
            <!-- Form fields pre-populated with current values -->
            <table>
                <tr>
                    <td>Product ID:</td>
                    <td><?php echo $product->jpcProductID; ?></td>
                </tr>
                <tr>
                    <td>Product Code:</td>
                    <td><input type="text" name="jpcProductCode" value="<?php echo $product->jpcProductCode; ?>"></td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="jpcProductName" value="<?php echo $product->jpcProductName; ?>"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input type="text" name="jpcProductDescription" value="<?php echo $product->jpcProductDescription; ?>"></td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td><input type="text" name="jpcProductYear" value="<?php echo $product->jpcProductYear; ?>"></td>
                </tr>
                <tr>
                    <td>Category ID:</td>
                    <td><input type="text" name="jpcCategoryID" value="<?php echo $product->jpcCategoryID; ?>"></td>
                </tr>
                <tr>
                    <td>Wholesale Price:</td>
                    <td><input type="text" name="jpcWholesalePrice" value="<?php echo $product->jpcWholesalePrice; ?>"></td>
                </tr>
                <tr>
                    <td>List Price:</td>
                    <td><input type="text" name="jpcListPrice" value="<?php echo $product->jpcListPrice; ?>"></td>
                </tr>
            </table><br><br>
            <input type="submit" name="answer" value="Update Product">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="jpcProductID" value="<?php echo $jpcProductID; ?>">
            <input type="hidden" name="content" value="changeJpcProduct">
        </form>
    <?php
    } else {
        // Product not found message
    ?>
        <h2>Sorry, product <?php echo $jpcProductID; ?> not found</h2>
        <a href="jpcIndex.php?content=listJpcProduct">List Products</a>
<?php
    }
}
?>

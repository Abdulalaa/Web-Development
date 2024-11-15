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
    $jpcProductID = htmlspecialchars($_POST['jpcProductID']);
    $product = jpcProduct::findProduct($jpcProductID);
    
    if ($product) {
        // Display update form with current product values
    ?>
        <h2>Update Product <?php echo htmlspecialchars($product->jpcProductID); ?></h2><br>
        <form name="updateJpcProduct" action="jpcIndex.php" method="post">
            <!-- Form fields pre-populated with current values -->
            <table cellpadding="1" border="0">
                <tr>
                    <td>Product ID:</td>
                    <td><input type="number" name="jpcProductID" size="4" min="1000" max="9999"
                        minlength="3" maxlength="10" value="<?php echo htmlspecialchars($product->jpcProductID); ?>" required></td>
                </tr>
                <tr>
                    <td>Product Code:</td>
                    <td><input type="text" name="jpcProductCode" size="20" minlength="3" maxlength="10"
                        value="<?php echo htmlspecialchars($product->jpcProductCode); ?>" required></td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="jpcProductName" size="50" minlength="1" maxlength="100"
                        value="<?php echo htmlspecialchars($product->jpcProductName); ?>" required></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input type="text" name="jpcProductDescription" size="50" minlength="1"
                        value="<?php echo htmlspecialchars($product->jpcProductDescription); ?>" required></td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td><input type="number" name="jpcProductYear" size="4" min="1600" max="2100"
                        value="<?php echo htmlspecialchars($product->jpcProductYear); ?>" required></td>
                </tr>
                <tr>
                    <td>Category ID:</td>
                    <td><input type="number" name="jpcCategoryID" size="4" min="100" max="999" 
                        minlength="3" maxlength="10" value="<?php echo htmlspecialchars($product->jpcCategoryID); ?>" required></td>
                </tr>
                <tr>
                    <td>Wholesale Price:</td>
                    <td><input type="number" name="jpcWholesalePrice" size="10" min="0.01" max="99999.99" step="0.01"
                        value="<?php echo htmlspecialchars($product->jpcWholesalePrice); ?>" required></td>
                </tr>
                <tr>
                    <td>List Price:</td>
                    <td><input type="number" name="jpcListPrice" size="10" min="0.01" max="99999.99" step="0.01"
                        value="<?php echo htmlspecialchars($product->jpcListPrice); ?>" required></td>
                </tr>
            </table><br><br>
            <input type="submit" name="answer" value="Update Product">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="jpcProductID" value="<?php echo htmlspecialchars($jpcProductID); ?>">
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

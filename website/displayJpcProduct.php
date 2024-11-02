<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Displays detailed information for a single product.
 * Called from: Product search in jpcNav.php
 * Uses: jpcProduct class for data retrieval
 */

include("jpcProduct.php");

// Validate the product ID input
if (!isset($_REQUEST['jpcProductID']) or (!is_numeric($_REQUEST['jpcProductID']))) {
?>
    <h2>You did not select a valid Product ID to view.</h2>
    <a href="jpcIndex.php?content=listJpcProduct">List Products</a>
<?php
} else {
    // Attempt to find and display the product
    $jpcProductID = $_REQUEST['jpcProductID'];
    $product = jpcProduct::findProduct($jpcProductID);
    
    if ($product) {
        // Display product details in a formatted table
?>
        <h2>Product Details</h2>
        <table>
            <tr>
                <td><strong>Product ID:</strong></td>
                <td><?php echo $product->jpcProductID; ?></td>
            </tr>
            <tr>
                <td><strong>Product Code:</strong></td>
                <td><?php echo $product->jpcProductCode; ?></td>
            </tr>
            <!-- ... other product details ... -->
        </table>
<?php
    } else {
        echo "<h2>Sorry, product $jpcProductID not found</h2>\n";
    }
}
?> 
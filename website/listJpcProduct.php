
<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Displays a list of all products in the system.
 * Accessed from: Navigation menu
 * Uses: jpcProduct class for data retrieval
 */

include("jpcProduct.php");

// Retrieve all products from database
$products = jpcProduct::getProducts();

echo "<h2>Current Products:</h2>\n";
?>

<div style="max-height: 400px; overflow-y: auto; border: 1px solid #E2EAEF; padding: 10px; margin-bottom: 50px;">
<?php
// Check if any products were found
if ($products) {
    // Display each product in the list
    foreach($products as $product) {
        $jpcProductID = $product->jpcProductID;
        $name = $jpcProductID . " - " . $product->jpcProductCode . " - " . $product->jpcProductName;
        echo "$name<br>\n";
    }
} else {
    echo "<h2>No products found.</h2>\n"; 
}
?>
</div>


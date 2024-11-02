<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Handles product deletion from the system.
 * Called from: Product list or detail views
 * Uses: jpcProduct class for database operations
 */

include("jpcProduct.php");

// Get product ID from URL parameters
$jpcProductID = $_GET['jpcProductID'];

// Attempt to find the product
$product = jpcProduct::findProduct($jpcProductID);

if ($product) {
    // Attempt to remove the product
    $result = $product->removeProduct();
    
    if ($result) {
        echo "<h2>Product $jpcProductID removed</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem while removing product $jpcProductID</h2>\n";
    }
} else {
    echo "<h2>Product $jpcProductID not found</h2>\n";
}
?>
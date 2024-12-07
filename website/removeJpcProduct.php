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

if (isset($_SESSION['login'])) {
    if (isset($_POST['jpcProductID']) && is_numeric($_POST['jpcProductID'])) {
        $jpcProductID = $_POST['jpcProductID'];
        
        // Attempt to find the product
        $product = jpcProduct::findProduct($jpcProductID);

        // Verify product exists
        if ($product) {
            // Attempt to remove the product
            $result = $product->removeProduct();
            
            if ($result) {
                echo "<h2>Product $jpcProductID removed</h2>\n";
            } else {
                echo "<h2>Sorry, problem occurred while removing product $jpcProductID</h2>\n";
            }
        } else {
            echo "<h2>Product $jpcProductID not found</h2>\n";
        }
    } else {
        echo "<h2>Invalid product ID provided</h2>\n";
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
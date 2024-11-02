<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Processes the product update form submission.
 * Called from: updateJpcProduct.php form submission
 * Uses: jpcProduct class for database operations
 */

include("jpcProduct.php");

// Verify user is logged in
if (isset($_SESSION['login'])) {
    // Get form data
    $jpcProductID = $_POST['jpcProductID'];
    $answer = $_POST['answer'];
    
    // Process based on which button was clicked
    if ($answer == "Update Product") {
        // Find existing product
        $product = jpcProduct::findProduct($jpcProductID);
        
        // Update product properties with form data
        $product->jpcProductCode = $_POST['jpcProductCode'];
        $product->jpcProductName = $_POST['jpcProductName'];
        $product->jpcProductDescription = $_POST['jpcProductDescription'];
        $product->jpcProductYear = $_POST['jpcProductYear'];
        $product->jpcCategoryID = $_POST['jpcCategoryID'];
        $product->jpcWholesalePrice = $_POST['jpcWholesalePrice'];
        $product->jpcListPrice = $_POST['jpcListPrice'];
        
        // Attempt to save updates
        $result = $product->updateProduct();
        if ($result) {
            echo "<h2>Product $jpcProductID updated</h2>\n";
        } else {
            echo "<h2>Problem updating product $jpcProductID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for product $jpcProductID</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
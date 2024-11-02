<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-202 Project
 * 
 * Processes the product creation form submission.
 * Called from: newJpcProduct.php form submission
 * Uses: jpcProduct class for database operations
 */

// Include the jpcProduct class file
include("jpcProduct.php");

if (isset($_SESSION['login'])) {
    // Check if form was submitted with product ID
    if (isset($_POST['jpcProductID'])) {
        $jpcProductID = $_POST['jpcProductID'];
        if ((trim($jpcProductID) == '') || (!is_numeric($jpcProductID))) {
            echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
        } else {
            // Get all form data
            $jpcProductCode = $_POST['jpcProductCode'];
            $jpcProductName = $_POST['jpcProductName'];
            $jpcProductDescription = $_POST['jpcProductDescription'];
            $jpcProductYear = $_POST['jpcProductYear'];
            $jpcCategoryID = $_POST['jpcCategoryID'];
            $jpcWholesalePrice = $_POST['jpcWholesalePrice'];
            $jpcListPrice = $_POST['jpcListPrice'];

            // Create new product object
            $product = new jpcProduct(
                $jpcProductID,
                $jpcProductCode,
                $jpcProductName,
                $jpcProductDescription,
                $jpcProductYear,
                $jpcCategoryID,
                $jpcWholesalePrice,
                $jpcListPrice
            );

            // Try to save the product
            $result = $product->saveProduct();
            if ($result) {
                echo "<h2>New Product #$jpcProductID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that product</h2>\n";
            }
        }
    } else {
        // If no form data, show the form
        include("newJpcProduct.php");
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
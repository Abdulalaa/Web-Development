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
        $jpcProductID = filter_input(INPUT_POST, 'jpcProductID', FILTER_VALIDATE_INT);
        if ((trim($jpcProductID) == '') || (!is_int($jpcProductID))) {
            echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
        } else if(jpcProduct::findProduct($jpcProductID)) {
            echo "<h2>Sorry, that product ID is already in use</h2>\n";
        } else {
            // Get all form data and sanitize
            $jpcProductCode = htmlspecialchars(trim($_POST['jpcProductCode']));
            $jpcProductName = htmlspecialchars(trim($_POST['jpcProductName']));
            $jpcProductDescription = htmlspecialchars(trim($_POST['jpcProductDescription']));
            $jpcProductYear = htmlspecialchars(trim($_POST['jpcProductYear']));
            $jpcCategoryID = htmlspecialchars(trim($_POST['jpcCategoryID']));
            $jpcWholesalePrice = htmlspecialchars(trim($_POST['jpcWholesalePrice']));
            $jpcListPrice = htmlspecialchars(trim($_POST['jpcListPrice']));

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
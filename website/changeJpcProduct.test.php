<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
include("jpcProduct.php");
$jpcProductID = $_GET['jpcProductID'];
$product = jpcProduct::findProduct($jpcProductID);

if ($product) {
    $product->jpcProductCode = $_GET['jpcProductCode'];
    $product->jpcProductName = $_GET['jpcProductName'];
    $product->jpcProductDescription = $_GET['jpcProductDescription'];
    $product->jpcProductYear = $_GET['jpcProductYear'];
    $product->jpcCategoryID = $_GET['jpcCategoryID'];
    $product->jpcWholesalePrice = $_GET['jpcWholesalePrice'];
    $product->jpcListPrice = $_GET['jpcListPrice'];

    $result = $product->updateProduct();
    
    if ($result) {
        echo "<h2>Product $jpcProductID updated</h2>\n";
    } else {
        echo "<h2>Problem updating product $jpcProductID</h2>\n";
    }
} else {
    echo "<h2>Product $jpcProductID not found</h2>\n";
}
?>
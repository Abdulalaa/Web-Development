<?php
include("jpcProduct.php");
$jpcProductID = $_GET['jpcProductID'];
if ((trim($jpcProductID) == '') || (!is_numeric($jpcProductID))) {
    echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $jpcProductCode = $_GET['jpcProductCode'];
    $jpcProductName = $_GET['jpcProductName'];
    $jpcProductDescription = $_GET['jpcProductDescription'];
    $jpcProductYear = $_GET['jpcProductYear'];
    $jpcCategoryID = $_GET['jpcCategoryID'];
    $jpcWholesalePrice = $_GET['jpcWholesalePrice'];
    $jpcListPrice = $_GET['jpcListPrice'];

    $product = new jpcProduct($jpcProductID, $jpcProductCode, $jpcProductName, $jpcProductDescription, $jpcProductYear, $jpcCategoryID, $jpcWholesalePrice, $jpcListPrice);
    $result = $product->saveProduct();
    
    if ($result) {
        echo "<h2>New Product #$jpcProductID successfully added</h2>\n";
        echo "<h2>$product</h2>\n";
    } else {
        echo "<h2>Sorry, unable to add new product</h2>\n";
    }
}
?>
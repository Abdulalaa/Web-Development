<?php
include("jpcProduct.php");
$jpcProductID = $_GET['jpcProductID'];
$product = jpcProduct::findProduct($jpcProductID);

if ($product) {
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
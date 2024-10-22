<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
include("jpcProduct.php");
$products = jpcProduct::getProducts();
echo "<h2>Current Products:</h2>\n";

if ($products) {
    foreach($products as $product) {
        $jpcProductID = $product->jpcProductID;
        $name = $jpcProductID . " - " . $product->jpcProductCode . " - " . $product->jpcProductName;
        echo "$name<br>";
    }
} else {
    echo "<h2>No products found.</h2>\n"; 
}
?>
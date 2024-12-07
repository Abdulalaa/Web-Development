<?php
// Include required class files
include("jpcCategory.php"); 
include("jpcProduct.php");

ob_clean(); // Clear output buffer

// Get total counts and sum using static methods
$totalCategories = jpcCategory::getTotalCategories();
$totalProducts = jpcProduct::getTotalProducts(); 
$listPriceTotal = jpcProduct::getTotalListPrice();
$wholesalePriceTotal = jpcProduct::getTotalWholesalePrice();

// Create new XML document
$doc = new DOMDocument("1.0");

// Create root inventory element
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);

// Add categories count element
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);

// Add products count element 
$products = $doc->createElement("products", $totalProducts);
$products = $inventory->appendChild($products);

// Add total list price element
$listPrice = $doc->createElement("listpricetotal", $listPriceTotal);
$listPrice = $inventory->appendChild($listPrice);

// Add total wholesale price element
$wholesalePrice = $doc->createElement("wholesalepricetotal", $wholesalePriceTotal);
$wholesalePrice = $inventory->appendChild($wholesalePrice);

// Generate the XML output
$output = $doc->saveXML();

// Set content type header to XML
header("Content-type: application/xml");

// Output the XML
echo $output;

?>

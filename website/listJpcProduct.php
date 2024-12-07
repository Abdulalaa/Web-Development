<script language="javascript">
    function listbox_dblclick() {
        document.jpcProduct.updateJpcProduct.click()
    }

    function button_click(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this product?");
        }
        if (userConfirmed) {
            if (target == 1) jpcProduct.action = "jpcIndex.php?content=removeJpcProduct";
            if (target == 2) jpcProduct.action = "jpcIndex.php?content=updateJpcProduct";
        } else {
            alert("Action canceled.");
        }
    }
</script>

<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Displays a list of all products in the system.
 * Accessed from: Navigation menu
 * Uses: jpcProduct class for data retrieval
 */
include("jpcProduct.php");

// Retrieve all products from database
$products = jpcProduct::getProducts();
?>

<h2>Select Product</h2>
<form name="jpcProduct" method="post">
    <select ondblclick="listbox_dblclick()" name="jpcProductID" size="20" style="max-height: 400px; overflow-y: auto; border: 1px solid #E2EAEF; padding: 10px; margin-bottom: 50px;">
        <?php
        // Check if any products were found
        if ($products) {
            // Display each product in the list
            foreach($products as $product) {
                $jpcProductID = $product->jpcProductID;
                $name = $jpcProductID . " - " . $product->jpcProductCode . " - " . $product->jpcProductName;
                echo "<option value=\"$jpcProductID\">$name</option>\n";
            }
        } else {
            echo "<option>No products found.</option>\n";
        }
        ?>
    </select>
    <br>
    <input type="submit" onClick="button_click(1)" name="deleteJpcProduct" value="Delete Product">
    <input type="submit" onClick="button_click(2)" name="updateJpcProduct" value="Update Product">
</form>

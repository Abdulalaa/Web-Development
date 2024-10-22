<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
require_once('jpcDatabase.php');

class jpcProduct
{
    public $jpcProductID;
    public $jpcProductCode;
    public $jpcProductName;
    public $jpcProductDescription;
    public $jpcProductYear;
    public $jpcCategoryID;
    public $jpcWholesalePrice;
    public $jpcListPrice;

    function __construct($jpcProductID, $jpcProductCode, $jpcProductName, $jpcProductDescription, $jpcProductYear, $jpcCategoryID, $jpcWholesalePrice, $jpcListPrice)
    {
        $this->jpcProductID = $jpcProductID;
        $this->jpcProductCode = $jpcProductCode;
        $this->jpcProductName = $jpcProductName;
        $this->jpcProductDescription = $jpcProductDescription;
        $this->jpcProductYear = $jpcProductYear;
        $this->jpcCategoryID = $jpcCategoryID;
        $this->jpcWholesalePrice = $jpcWholesalePrice;
        $this->jpcListPrice = $jpcListPrice;
    }

    function __toString()
    {
        return 
            "Product ID: " . $this->jpcProductID . "\n" .
            "Product Code: " . $this->jpcProductCode . "\n" .
            "Product Name: " . $this->jpcProductName . "\n" .
            "Description: " . $this->jpcProductDescription . "\n" .
            "Year: " . $this->jpcProductYear . "\n" .
            "Category ID: " . $this->jpcCategoryID . "\n" .
            "Wholesale Price: $" . number_format($this->jpcWholesalePrice, 2) . "\n" .
            "List Price: $" . number_format($this->jpcListPrice, 2) . "\n";
    }

    function saveProduct()
    {
        $db = getDB();
        $query = "INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param("isssiiid", $this->jpcProductID, $this->jpcProductCode, $this->jpcProductName, $this->jpcProductDescription, $this->jpcProductYear, $this->jpcCategoryID, $this->jpcWholesalePrice, $this->jpcListPrice);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    static function findProduct($jpcProductID)
    {
        $db = getDB();
        $query = "SELECT * FROM jpcProducts WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $jpcProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $product = new jpcProduct(
                $row['jpcProductID'],
                $row['jpcProductCode'],
                $row['jpcProductName'],
                $row['jpcProductDescription'],
                $row['jpcProductYear'],
                $row['jpcCategoryID'],
                $row['jpcWholesalePrice'],
                $row['jpcListPrice']
            );
            $stmt->close();
            $db->close();
            return $product;
        } else {
            $stmt->close();
            $db->close();
            return null;
        }
    }

    static function getProducts()
    {
        $db = getDB();
        $query = "SELECT jpcProductID, jpcProductCode, jpcProductName FROM jpcProducts";
        $result = $db->query($query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new jpcProduct(
                    $row['jpcProductID'],
                    $row['jpcProductCode'],
                    $row['jpcProductName'],
                    "", 
                    0, 
                    0, 
                    0.00, 
                    0.00
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;
        } else {
            $db->close();
            return null;
        }
    }

    function updateProduct()
    {
        $db = getDB();
        $query = "UPDATE jpcProducts SET jpcProductCode = ?, jpcProductName = ?, jpcProductDescription = ?, jpcProductYear = ?, jpcCategoryID = ?, jpcWholesalePrice = ?, jpcListPrice = ? WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssiiiddi", $this->jpcProductCode, $this->jpcProductName, $this->jpcProductDescription, $this->jpcProductYear, $this->jpcCategoryID, $this->jpcWholesalePrice, $this->jpcListPrice, $this->jpcProductID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    function removeProduct()
    {
        $db = getDB();
        $query = "DELETE FROM jpcProducts WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->jpcProductID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }
}
?>
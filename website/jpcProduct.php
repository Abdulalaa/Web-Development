<?php
// Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu

// Include the database connection file
require_once('jpcDatabase.php');

// Define a class to represent a product in the Japan Collectors (JPC) system
class jpcProduct
{
    // Properties of the product
    public $jpcProductID;           // Unique identifier for the product
    public $jpcProductCode;         // A code representing the product
    public $jpcProductName;         // The name of the product
    public $jpcProductDescription;  // A description of the product
    public $jpcProductYear;         // The year the product was released
    public $jpcCategoryID;          // The category ID the product belongs to
    public $jpcWholesalePrice;      // The wholesale price of the product
    public $jpcListPrice;           // The list price of the product

    // Constructor method to initialize a new product object
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

    // Method to convert the product object to a string representation
    function __toString()
    {
        return 
            "Product ID: " . $this->jpcProductID . "\n" .
            "Product Code: " . $this->jpcProductCode . "\n" .
            "Product Name: " . $this->jpcProductName . "\n" .
            "Description: " . $this->jpcProductDescription . "\n" .
            "Year: " . $this->jpcProductYear . "\n" .
            "Category ID: " . $this->jpcCategoryID . "\n" .
            "Wholesale Price: $" . number_format($this->jpcWholesalePrice, 2) . "\n" . // Format the wholesale price to 2 decimal places
            "List Price: $" . number_format($this->jpcListPrice, 2) . "\n"; // Format the list price to 2 decimal places
    }

    // Method to save a new product to the database
    function saveProduct()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to insert a new product
        $query = "INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        // Bind parameters and execute the query
        $stmt->bind_param("isssiiid", $this->jpcProductID, $this->jpcProductCode, $this->jpcProductName, $this->jpcProductDescription, $this->jpcProductYear, $this->jpcCategoryID, $this->jpcWholesalePrice, $this->jpcListPrice);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }

    // Static method to find a specific product by ID
    static function findProduct($jpcProductID)
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to find a product by ID
        $query = "SELECT * FROM jpcProducts WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $jpcProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // If a product is found, create and return a product object
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
            return null;  // Return null if no product is found
        }
    }

    // Static method to retrieve all products from the database
    static function getProducts()
    {
        $db = getDB();  // Get database connection
        // SQL query to select all products (only ID, code, and name)
        $query = "SELECT jpcProductID, jpcProductCode, jpcProductName FROM jpcProducts";
        $result = $db->query($query);
        
        // If products are found, create product objects and add them to an array
        if ($result && mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new jpcProduct(
                    $row['jpcProductID'],
                    $row['jpcProductCode'],
                    $row['jpcProductName'],
                    "", // Empty description
                    0,  // Default year
                    0,  // Default category ID
                    0.00, // Default wholesale price
                    0.00  // Default list price
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;  // Return the array of product objects
        } else {
            $db->close();
            return null;  // Return null if no products are found
        }
    }

    // Method to update an existing product in the database
    function updateProduct()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to update a product
        $query = "UPDATE jpcProducts SET jpcProductCode = ?, jpcProductName = ?, jpcProductDescription = ?, jpcProductYear = ?, jpcCategoryID = ?, jpcWholesalePrice = ?, jpcListPrice = ? WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        // Bind parameters and execute the query
        $stmt->bind_param("ssiiiddi", $this->jpcProductCode, $this->jpcProductName, $this->jpcProductDescription, $this->jpcProductYear, $this->jpcCategoryID, $this->jpcWholesalePrice, $this->jpcListPrice, $this->jpcProductID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }

    // Method to remove a product from the database
    function removeProduct()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to delete a product
        $query = "DELETE FROM jpcProducts WHERE jpcProductID = ?";
        $stmt = $db->prepare($query);
        // Bind parameter and execute the query
        $stmt->bind_param("i", $this->jpcProductID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }
}
?>
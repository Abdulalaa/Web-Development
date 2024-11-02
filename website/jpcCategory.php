<?php
// Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu

// Include the database connection file
require_once('jpcDatabase.php');

// Define a class to represent a category in the Japan Collectors (JPC) system
class jpcCategory
{
    // Properties of the category
    public $jpcCategoryID;     // Unique identifier for the category
    public $jpcCategoryCode;   // A code representing the category
    public $jpcCategoryName;   // The name of the category
    public $jpcCategoryDesc;   // A description of the category

    // Constructor method to initialize a new category object
    function __construct($jpcCategoryID, $jpcCategoryCode, $jpcCategoryName, $jpcCategoryDesc)
    {
        $this->jpcCategoryID = $jpcCategoryID;
        $this->jpcCategoryCode = $jpcCategoryCode;
        $this->jpcCategoryName = $jpcCategoryName;
        $this->jpcCategoryDesc = $jpcCategoryDesc; 
    }

    // Method to convert the category object to a string representation
    function __toString()
    {
        return 
            "<h2>Category Number: $this->jpcCategoryID</h2>\n" .
            "<h2>$this->jpcCategoryCode, $this->jpcCategoryName</h2>\n" .
            "<h3>$this->jpcCategoryDesc</h3>\n";
    }

    // Method to save a new category to the database
    function saveCategory()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to insert a new category
        $query = "INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        // Bind parameters and execute the query
        $stmt->bind_param("isss", $this->jpcCategoryID, $this->jpcCategoryCode, $this->jpcCategoryName, $this->jpcCategoryDesc);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }

    // Static method to retrieve all categories from the database
    static function getCategories()
    {
        $db = getDB();  // Get database connection
        // SQL query to select all categories
        $query = "SELECT jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated FROM jpcCategories";
        $result = $db->query($query);
        $categories = array();  // Initialize an array to store category objects

        // If categories are found, create category objects and add them to the array
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $category = new jpcCategory(
                    $row['jpcCategoryID'],
                    $row['jpcCategoryCode'],
                    $row['jpcCategoryName'],
                    $row['jpcCategoryDesc']
                );
                array_push($categories, $category);
            }
        }

        $db->close();
        return $categories;  // Return the array of category objects
    }

    // Static method to find a specific category by ID
    static function findCategory($jpcCategoryID) 
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to find a category by ID
        $query = "SELECT * FROM jpcCategories WHERE jpcCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $jpcCategoryID);
        $stmt->execute();
        $result = $stmt->get_result();

        // If a category is found, create and return a category object
        if ($result && mysqli_num_rows($result) > 0) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            return new jpcCategory(
                $row['jpcCategoryID'],
                $row['jpcCategoryCode'],
                $row['jpcCategoryName'],
                $row['jpcCategoryDesc']
            );
        }

        $stmt->close();
        $db->close();
        return null;  // Return null if no category is found
    }

    // Method to update an existing category in the database
    function updateCategory()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to update a category
        $query = "UPDATE jpcCategories SET jpcCategoryCode = ?, jpcCategoryName = ?, jpcCategoryDesc = ? WHERE jpcCategoryID = ?";
        $stmt = $db->prepare($query);
        // Bind parameters and execute the query
        $stmt->bind_param("sssi", $this->jpcCategoryCode, $this->jpcCategoryName, $this->jpcCategoryDesc, $this->jpcCategoryID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }

    // Method to remove a category from the database
    function removeCategory()
    {
        $db = getDB();  // Get database connection
        // Prepare SQL query to delete a category
        $query = "DELETE FROM jpcCategories WHERE jpcCategoryID = ?"; 
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->jpcCategoryID); 
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;  // Return the result of the operation
    }
}
?>
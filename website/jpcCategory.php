<?php
//Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
require_once('jpcDatabase.php');

class jpcCategory
{
    public $jpcCategoryID;
    public $jpcCategoryCode;
    public $jpcCategoryName;
    public $jpcCategoryDesc;

    function __construct($jpcCategoryID, $jpcCategoryCode, $jpcCategoryName, $jpcCategoryDesc)
    {
        $this->jpcCategoryID = $jpcCategoryID;
        $this->jpcCategoryCode = $jpcCategoryCode;
        $this->jpcCategoryName = $jpcCategoryName;
        $this->jpcCategoryDesc = $jpcCategoryDesc; 
    }

    function __toString()
    {
        return 
            "<h2>Category Number: $this->jpcCategoryID</h2>\n" .
            "<h2>$this->jpcCategoryCode, $this->jpcCategoryName</h2>\n" .
            "<h3>$this->jpcCategoryDesc</h3>\n";
    }

    function saveCategory()
    {
        $db = getDB();
        $query = "INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param("isss", $this->jpcCategoryID, $this->jpcCategoryCode, $this->jpcCategoryName, $this->jpcCategoryDesc);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    static function getCategories()
    {
        $db = getDB();
        $query = "SELECT jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated FROM jpcCategories";
        $result = $db->query($query);
        $categories = array(); // Initialize the categories array

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
        return $categories; // Return categories or null
    }

    static function findCategory($jpcCategoryID) 
    {
        $db = getDB();
        $query = "SELECT * FROM jpcCategories WHERE jpcCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $jpcCategoryID);
        $stmt->execute();
        $result = $stmt->get_result();

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
        return null; // Return null if no category is found
    }

    function updateCategory()
    {
        $db = getDB();
        $query = "UPDATE jpcCategories SET jpcCategoryCode = ?, jpcCategoryName = ?, jpcCategoryDesc = ? WHERE jpcCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("sssi", $this->jpcCategoryCode, $this->jpcCategoryName, $this->jpcCategoryDesc, $this->jpcCategoryID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    function removeCategory()
    {
        $db = getDB();
        $query = "DELETE FROM jpcCategories WHERE jpcCategoryID = ?"; 
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->jpcCategoryID); 
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }
}
?>
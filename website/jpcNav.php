<?php
/**
 * Navigation menu component that changes based on user login status.
 * Provides links to all major functions of the application.
 */
?>

<table width="100%" cellpadding="3">
    <?php
    // Check if user is logged in
    if (!isset($_SESSION['login'])) {
        // Show minimal navigation for non-logged in users
        ?>
        <tr>
            <td><hr /></td>
        </tr>
    <?php
    } else {
        // Show full navigation menu for logged-in users
        echo "<td><h3>Welcome</h3></td>\n";
        ?>
        <!-- Navigation links section -->
        <tr>
            <td>
                <img src="images/home.png" alt="Home Icon" style="width: 12px; height: 12px;">&nbsp;
                <a href="jpcIndex.php"><strong>Home</strong></a>
            </td>
        </tr>
        
        <!-- Category Management Section -->
        <tr>
            <td>
                <img src="images/categories.png" alt="Category Icon" style="width: 12px; height: 12px;">&nbsp;
                <strong>jpc Categories</strong>
            </td>
        </tr>
        <tr>
            <td><a href="jpcIndex.php?content=listJpcCategory"><strong>List Categories</strong></a></td>
        </tr>
        <tr>
            <td><a href="jpcIndex.php?content=addJpcCategory"><strong>Add Category</strong></a></td>
        </tr>
        
        <!-- Product Management Section -->
        <tr>
            <td>
                <img src="images/items.png" alt="Product Icon" style="width: 12px; height: 12px;">&nbsp;
                <strong>jpc Products</strong>
            </td>
        </tr>
        <tr>
            <td><a href="jpcIndex.php?content=listJpcProduct"><strong>List Products</strong></a></td>
        </tr>
        <tr>
            <td><a href="jpcIndex.php?content=addJpcProduct"><strong>Add Product</strong></a></td>
        </tr>
        
        <!-- Search Forms Section -->
        <tr>
            <td>
                <!-- Product Search - Submits to updateJpcProduct.php -->
                <form action="jpcIndex.php" method="post">
                    <label>Search for Product:</label><br>
                    <input type="text" name="jpcProductID" size="14" />
                    <input type="submit" value="Search" />
                    <input type="hidden" name="content" value="updateJpcProduct" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <!-- Category Search - Submits to displayJpcCategory.php -->
                <form action="jpcIndex.php" method="post">
                    <label>Search for Category:</label><br>
                    <input type="text" name="jpcCategoryID" size="14" />
                    <input type="submit" value="Search" />
                    <input type="hidden" name="content" value="displayJpcCategory" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="images/logout.png" alt="Logout Icon" style="width: 12px; height: 12px;">&nbsp;
                <a href="jpcIndex.php?content=jpcLogout"><strong>Logout</strong></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
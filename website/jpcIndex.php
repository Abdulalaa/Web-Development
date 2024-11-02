<?php
/**
 * Abdullah Abdallah
 * Fall 2024
 * IT-114
 * IT-202 Project
 * 
 * Main controller file that handles all page routing and session management.
 * This file serves as the entry point for all pages in the application.
 */

// Start or resume the user's session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Japan Collectors</title>
    </head>
    <body>
        <header>
            <?php 
            // Include the header component which shows the site title
            include("jpcHeader.php"); 
            ?>
        </header>
        <section style="height: 425px;">
            <nav style="float: left; height: 100%;">
                <?php 
                // Include the navigation menu which changes based on login status
                include("jpcNav.php"); 
                ?>
            </nav>
            <main>
                <?php
                // Dynamic content loading based on user requests
                // The 'content' parameter determines which page to load
                if (isset($_REQUEST['content'])) {
                    // Load the requested page (e.g., addJpcProduct.php, listJpcCategory.php)
                    include($_REQUEST['content'] . ".php");
                } else {
                    // Load the default main page if no specific content is requested
                    include("jpcMain.php");
                }
                ?>
            </main>
        </section>
        <footer>
            <?php 
            // Include the footer component with copyright and timestamp
            include("jpcFooter.php"); 
            ?>
        </footer>
    </body>
</html>
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
        <!-- JavaScript for real-time inventory updates -->
        <script language="javascript" type="text/javascript">
            function getRealTime() {
                var domcategories = document.getElementById("categorycount");
                var domproducts = document.getElementById("itemcount"); 
                var domlistpricetotal = document.getElementById("listpricetotal");
                var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
                var request = new XMLHttpRequest();
                request.open("GET", "realtime.php", true);
                
                request.onreadystatechange = function() {
                    if (request.readyState == 4 && request.status == 200) {
                        try {
                            var xmldoc = request.responseXML;
                            if (xmldoc) {
                                var categories = xmldoc.getElementsByTagName("categories")[0].childNodes[0].nodeValue;
                                var products = xmldoc.getElementsByTagName("products")[0].childNodes[0].nodeValue;
                                var listpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0].childNodes[0].nodeValue;
                                var wholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0].childNodes[0].nodeValue;
                                domcategories.innerHTML = categories;
                                domproducts.innerHTML = products;
                                domlistpricetotal.innerHTML = listpricetotal;
                                domwholesalepricetotal.innerHTML = wholesalepricetotal;
                            }
                        } catch (e) {
                            console.error("Error processing XML response:", e);
                        }
                    }
                };
                request.send();
            }
        </script>
        <title>Japan Collectors</title>
        <link rel="stylesheet" href="jpc_styles.css">
        <link rel="icon" type="image/png" href="images/logo.png">
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
                <!-- Aside section for real-time inventory stats -->
                <aside>
                    <?php include("aside.php"); ?>
                    <script language="javascript" type="text/javascript">
                        // Initialize real-time updates
                        getRealTime();
                        // Update every 5 seconds
                        setInterval(getRealTime, 5000);
                    </script>
                </aside>
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
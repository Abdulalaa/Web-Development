<?php

// Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// Main file of website, starts session, handles requests or actions by user, provides structure

// Start Session
session_start();
?>

<!-- HTML structure -->
<!DOCTYPE html>
<html>
    <head><title>Japan Collectors</title></head>
    <body>
        <section id="container">
            <main>
                <?php
                if (isset($_REQUEST['content'])) {
                    // Check if content is set in request
                    include($_REQUEST['content'] . ".php");
                } else {
                    // If not, include default content
                    include("jpcMain.php");
                }
                ?>
            </main>
        </section>
    </body>
</html>
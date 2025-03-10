<?php

// If session is active
if (isset($_SESSION['login'])) {
    // Clear session for logout
    session_unset();
}
// Redirect to index
echo "<script>window.location.href = 'jpcIndex.php';</script>";
?>
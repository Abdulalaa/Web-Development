<?php
// Abdullah Abdallah, October 4, IT202 Section 005, Phase 1: Login/Logout, aaa@njit.edu

// If session is active
if (isset($_SESSION['login'])) {
    // Clear session for logout
    session_unset();
}
// Redirect to index
echo "<script>window.location.href = 'jpcIndex.php';</script>";
?>
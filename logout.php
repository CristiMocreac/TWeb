<?php
// Start the session to access session data
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page after logging out
header("Location: index.php");
exit;
?>

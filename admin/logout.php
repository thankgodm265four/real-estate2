<?php
/**
 * Admin Logout
 * Destroys session and redirects to login
 */

session_start();

// Destroy session
$_SESSION = [];
session_destroy();

// Redirect to login
header('Location: /admin/login.php');
exit();

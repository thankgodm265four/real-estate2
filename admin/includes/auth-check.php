<?php
/**
 * Auth Check - Session Guard for Admin Pages
 * Include this at the top of every admin page to ensure user is authenticated
 */

session_start();

/**
 * Check if user is authenticated
 * For now, we use a simple session-based auth
 * When Supabase is integrated, this will validate Supabase session
 */
function requireAuth() {
    // Check if admin session exists
   if (!isset($_SESSION['admin_authenticated']) || $_SESSION['admin_authenticated'] !== true) {
        // Redirect to login page
        header('Location: /admin/login.php');
        exit();
    }
}

/**
 * Check if user is logged in (without redirect)
 */
function isLoggedIn() {
    return isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true;
}

/**
 * Get admin user info
 */
function getAdminUser() {
    return $_SESSION['admin_user'] ?? null;
}

/**
 * Set admin session
 */
function setAdminSession($user) {
    $_SESSION['admin_authenticated'] = true;
    $_SESSION['admin_user'] = $user;
}

/**
 * Destroy admin session (logout)
 */
function destroyAdminSession() {
    $_SESSION = [];
    session_destroy();
}

// For Supabase integration later
// This function will validate the Supabase JWT token from frontend
function validateSupabaseSession($token) {
    // TODO: Implement Supabase JWT validation
    // For now, return true if session exists
    return isLoggedIn();
}

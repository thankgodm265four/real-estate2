<?php
/**
 * Admin Header
 * Common header for all admin pages
 */
require_once __DIR__ . '/auth-check.php';
require_once __DIR__ . '/../../config/supabase.php';

$adminUser = getAdminUser();
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Kindreal Properties</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Supabase JS Client -->
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    
    <!-- Custom Supabase Client -->
    <script src="/assets/js/supabase-client.js"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        /* Admin custom styles with modern gradients */
        .admin-sidebar-link {
            @apply flex items-center gap-3 px-4 py-3 text-gray-600 rounded-lg transition-all duration-200 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-gray-900;
        }
        
        .admin-sidebar-link.active {
            @apply bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium shadow-lg;
        }
        
        .admin-card {
            @apply bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow;
        }
        
        .btn-primary {
            @apply bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-medium hover:shadow-lg hover:scale-105 transition-all;
        }
        
        .btn-secondary {
            @apply bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-medium hover:bg-gray-200 transition-colors;
        }
        
        .form-input {
            @apply w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all;
        }
        
        .form-label {
            @apply block text-sm font-semibold text-gray-700 mb-2;
        }
        
        /* Gradient text */
        .gradient-text {
            @apply bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50/20">
    
    <!-- Admin Layout -->
    <div class="flex min-h-screen">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-gray-900 to-black border-r border-gray-800 fixed h-full overflow-y-auto">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-800">
                <div class="flex items-center gap-2">
                    <img src="<?php echo getSiteSetting('logo_url', 'https://kindreal-properties.com/images/logo.svg'); ?>" alt="Kindreal" class="h-8 w-auto filter brightness-0 invert">
                    <span class="text-xl font-bold text-white">Admin</span>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="p-4 space-y-2">
                <style>
                    .admin-sidebar-link {
                        @apply flex items-center gap-3 px-4 py-3 text-gray-300 rounded-lg transition-all duration-200 hover:bg-white/10;
                    }
                    .admin-sidebar-link.active {
                        @apply bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium shadow-lg;
                    }
                    .admin-sidebar-link:not(.active):hover {
                        @apply text-white;
                    }
                </style>
                <a href="/admin/index.php" class="admin-sidebar-link <?php echo $currentPage === 'index' ? 'active' : ''; ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>
                
                <a href="/admin/posts.php" class="admin-sidebar-link <?php echo $currentPage === 'posts' ? 'active' : ''; ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    All Posts
                </a>
                
                <a href="/admin/create-post.php" class="admin-sidebar-link <?php echo $currentPage === 'create-post' ? 'active' : ''; ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Post
                </a>
                
                <a href="/admin/settings.php" class="admin-sidebar-link <?php echo $currentPage === 'settings' ? 'active' : ''; ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                
                <hr class="my-4 border-gray-200">
                
                <a href="/blog/index.php" target="_blank" class="admin-sidebar-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    View Site
                </a>
                
                <a href="/admin/logout.php" class="admin-sidebar-link text-red-400 hover:bg-red-500/10 hover:text-red-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="ml-64 flex-1 p-8">
            
            <!-- Page Header -->
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900" id="page-title">Dashboard</h1>
                    <p class="text-gray-500 mt-1" id="page-subtitle">Welcome back, <?php echo htmlspecialchars($adminUser['email'] ?? 'Admin'); ?></p>
                </div>
                
                <!-- User Menu -->
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900"><?php echo htmlspecialchars($adminUser['email'] ?? 'Admin'); ?></p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                        <?php echo strtoupper(substr($adminUser['email'] ?? 'A', 0, 1)); ?>
                    </div>
                </div>
            </div>
            
            <!-- Page Content -->
            <div id="admin-content">

<?php
/**
 * Premium Admin Dashboard - Blog CMS
 * Beautiful, modern design with gradients and animations
 */

require_once __DIR__ . '/includes/auth-check.php';
requireAuth();

$adminUser = getAdminUser();
$userName = explode('@', $adminUser['email'] ?? 'Admin')[0];
$userName = ucfirst($userName);

$hour = date('H');
if ($hour < 12) {
    $greeting = "Good Morning";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kindreal Blog Admin</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    <script src="/assets/js/supabase-client.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .sidebar-link {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .sidebar-link:hover {
            transform: translateX(4px);
        }
        
        .sidebar-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
            border-radius: 0 4px 4px 0;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body>

<div class="flex h-screen overflow-hidden">
    
    <!-- Premium Sidebar with Dark Gradient -->
    <aside class="w-64 bg-gradient-to-b from-gray-900 via-gray-800 to-black flex flex-col shadow-2xl">
        <!-- Logo Section -->
        <div class="h-16 flex items-center px-6 border-b border-white/10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    K
                </div>
                <div>
                    <span class="font-bold text-white text-lg">Kindreal</span>
                    <p class="text-xs text-gray-400">Blog Admin</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/admin/index.php" class="sidebar-link active flex items-center gap-3 px-4 py-3 text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl font-medium text-sm shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>
            
            <a href="/admin/posts.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl font-medium text-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                All Posts
            </a>
            
            <a href="/admin/create-post.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl font-medium text-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Post
            </a>
            
            <div class="pt-4 pb-2">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Manage</p>
            </div>
            
            <a href="/admin/settings.php" class="sidebar-link flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl font-medium text-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a>
        </nav>
        
        <!-- User Profile -->
        <div class="p-4 border-t border-white/10 bg-black/20">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    <?php echo strtoupper(substr($userName, 0, 1)); ?>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-white truncate"><?php echo htmlspecialchars($userName); ?></p>
                    <p class="text-xs text-gray-400 truncate">Administrator</p>
                </div>
            </div>
            <a href="/admin/logout.php" class="flex items-center justify-center gap-2 w-full px-3 py-2 text-sm text-gray-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-lg transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </a>
        </div>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Premium Top Bar -->
        <header class="h-20 glass-card shadow-lg flex items-center justify-between px-8">
            <div>
                <h1 class="text-2xl font-bold gradient-text"><?php echo $greeting; ?>, <?php echo htmlspecialchars($userName); ?>! 👋</h1>
                <p class="text-sm text-gray-500 mt-1">Welcome back to your dashboard</p>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="/blog.php" target="_blank" class="hidden md:flex items-center gap-2 px-5 py-2.5 bg-white hover:bg-gray-50 border border-gray-200 rounded-xl transition-all text-sm font-medium text-gray-700 shadow-sm hover:shadow-md">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    View Blog
                </a>
                
                <a href="/admin/create-post.php" class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-medium text-sm hover:shadow-xl transition-all transform hover:scale-105">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Post
                </a>
            </div>
        </header>
        
        <!-- Dashboard Content -->
        <main class="flex-1 overflow-y-auto p-8">
            
            <!-- Stats Cards with Premium Design -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Posts -->
                <div class="stat-card rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Total Posts</p>
                            <p class="text-4xl font-bold gradient-text mt-2" id="stat-total">0</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg float-animation">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 font-medium">All time content</p>
                </div>
                
                <!-- Published -->
                <div class="stat-card rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Published</p>
                            <p class="text-4xl font-bold gradient-text mt-2" id="stat-published">0</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg float-animation" style="animation-delay: 0.2s">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 font-medium">Live on website</p>
                </div>
                
                <!-- Drafts -->
                <div class="stat-card rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Drafts</p>
                            <p class="text-4xl font-bold gradient-text mt-2" id="stat-drafts">0</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg float-animation" style="animation-delay: 0.4s">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 font-medium">Work in progress</p>
                </div>
                
                <!-- Total Views -->
                <div class="stat-card rounded-2xl p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Total Views</p>
                            <p class="text-4xl font-bold gradient-text mt-2">12.5K</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg float-animation" style="animation-delay: 0.6s">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 font-medium">Last 30 days</p>
                </div>
            </div>
            
            <!-- Content Row -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Chart -->
                <div class="lg:col-span-2 glass-card rounded-2xl p-6 shadow-xl">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Post Views</h3>
                        <p class="text-sm text-gray-500 mt-1">Last 7 days performance</p>
                    </div>
                    <canvas id="viewsChart" height="80"></canvas>
                </div>
                
                <!-- Quick Actions -->
                <div class="glass-card rounded-2xl p-6 shadow-xl">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Quick Actions</h3>
                        <p class="text-sm text-gray-500 mt-1">Manage your content</p>
                    </div>
                    <div class="space-y-3">
                        <a href="/admin/create-post.php" class="block p-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:shadow-lg transition-all transform hover:scale-105">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Create New Post</p>
                                    <p class="text-xs text-white/80">Start writing</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/admin/posts.php" class="block p-4 bg-white border-2 border-gray-200 rounded-xl hover:border-blue-500 hover:shadow-lg transition-all">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Manage Posts</p>
                                    <p class="text-xs text-gray-500">View all content</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/admin/settings.php" class="block p-4 bg-white border-2 border-gray-200 rounded-xl hover:border-purple-500 hover:shadow-lg transition-all">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Settings</p>
                                    <p class="text-xs text-gray-500">Configure blog</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Recent Posts Table -->
            <div class="glass-card rounded-2xl p-6 shadow-xl">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Recent Posts</h3>
                        <p class="text-sm text-gray-500 mt-1">Your latest content</p>
                    </div>
                    <a href="/admin/posts.php" class="text-sm font-semibold text-blue-600 hover:text-blue-700">View All →</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="text-left py-4 px-4 text-xs font-bold text-gray-600 uppercase">Post</th>
                                <th class="text-left py-4 px-4 text-xs font-bold text-gray-600 uppercase">Status</th>
                                <th class="text-left py-4 px-4 text-xs font-bold text-gray-600 uppercase">Date</th>
                                <th class="text-right py-4 px-4 text-xs font-bold text-gray-600 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="recent-posts-body" class="divide-y divide-gray-100">
                            <tr>
                                <td colspan="4" class="py-12 text-center">
                                    <div class="flex flex-col items-center gap-3">
                                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-gray-500 font-medium">Loading posts...</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </main>
    </div>
</div>

<script>
const supabaseUrl = '<?php echo getSupabaseConfig()['url']; ?>';
const supabaseKey = '<?php echo getSupabaseConfig()['anon_key']; ?>';
initSupabase(supabaseUrl, supabaseKey);

document.addEventListener('DOMContentLoaded', () => {
    // Premium GSAP Animations
    gsap.from('.stat-card', {
        y: 40,
        opacity: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: 'power3.out'
    });
    
    gsap.from('.glass-card', {
        scale: 0.95,
        opacity: 0,
        duration: 1,
        delay: 0.5,
        stagger: 0.1,
        ease: 'power2.out'
    });
    
    loadDashboardData();
    
    // Premium Chart
    const ctx = document.getElementById('viewsChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(102, 126, 234, 0.4)');
    gradient.addColorStop(1, 'rgba(118, 75, 162, 0.05)');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Views',
                data: [420, 580, 650, 490, 720, 890, 650],
                borderColor: '#667eea',
                backgroundColor: gradient,
                tension: 0.4,
                fill: true,
                borderWidth: 3,
                pointBackgroundColor: '#667eea',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 6,
                pointHoverRadius: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    padding: 12,
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 13 },
                    cornerRadius: 8
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: 'rgba(0, 0, 0, 0.05)', borderDash: [5, 5] },
                    ticks: { color: '#9ca3af', font: { size: 12 } }
                },
                x: {
                    grid: { display: false },
                    ticks: { color: '#9ca3af', font: { size: 12, weight: '600' } }
                }
            }
        }
    });
});

async function loadDashboardData() {
    const sb = getSupabase();
    if (!sb) return;
    
    try {
        const { data: allPosts } = await sb.from('blog_posts').select('*').order('created_at', { ascending: false });
        
        const totalPosts = allPosts?.length || 0;
        const publishedPosts = allPosts?.filter(p => p.status === 'published').length || 0;
        const draftPosts = allPosts?.filter(p => p.status === 'draft').length || 0;
        
        document.getElementById('stat-total').textContent = totalPosts;
        document.getElementById('stat-published').textContent = publishedPosts;
        document.getElementById('stat-drafts').textContent = draftPosts;
        
        loadRecentPosts(allPosts?.slice(0, 5) || []);
    } catch (error) {
        console.error('Error:', error);
    }
}

function loadRecentPosts(posts) {
    const tbody = document.getElementById('recent-posts-body');
    
    if (!posts || posts.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="4" class="py-12 text-center">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 font-medium">No posts yet</p>
                        <a href="/admin/create-post.php" class="text-blue-600 font-semibold hover:text-blue-700">Create your first post →</a>
                    </div>
                </td>
            </tr>
        `;
        return;
    }
    
    tbody.innerHTML = posts.map(post => `
        <tr class="hover:bg-gray-50/50 transition-all">
            <td class="py-4 px-4">
                <div class="flex items-center gap-3">
                    ${post.featured_image_url ? 
                        `<img src="${post.featured_image_url}" alt="" class="w-12 h-12 rounded-lg object-cover shadow-md">` : 
                        '<div class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg"></div>'
                    }
                    <div>
                        <p class="font-semibold text-gray-900 line-clamp-1">${post.title}</p>
                        <p class="text-xs text-gray-500 mt-0.5">${post.slug}</p>
                    </div>
                </div>
            </td>
            <td class="py-4 px-4">
                <span class="px-3 py-1 ${post.status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'} text-xs font-semibold rounded-full capitalize">
                    ${post.status}
                </span>
            </td>
            <td class="py-4 px-4">
                <span class="text-sm text-gray-600 font-medium">${new Date(post.created_at).toLocaleDateString()}</span>
            </td>
            <td class="py-4 px-4 text-right">
                <a href="/admin/edit-post.php?slug=${post.slug}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Edit →</a>
            </td>
        </tr>
    `).join('');
}
</script>

</body>
</html>

<?php
session_start();
include 'includes/header.php';

// Check if admin is logged in
$isAdmin = isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true;
?>

<!-- Blog Page - Premium Design -->
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    <script src="/assets/js/supabase-client.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #0f0f1e 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .article-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .article-card:hover {
            transform: translateY(-12px) scale(1.02);
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

<section class="relative w-full min-h-screen">
    
    <!-- Admin Edit Bar (Only visible when logged in) -->
    <?php if ($isAdmin): ?>
    <div class="fixed top-4 right-4 z-50">
        <a href="/admin/index.php" class="group flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full shadow-2xl hover:shadow-purple-500/50 hover:scale-105 transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="font-semibold">Dashboard</span>
        </a>
    </div>
    <?php endif; ?>
    
    <!-- Premium Navigation Bar - Glassmorphism (Same as Landing Page) -->
    <nav id="mainNav" class="fixed top-0 left-0 right-0 flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 z-40 transition-all duration-300">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 relative z-50 group">
            <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 lg:h-12 w-auto filter brightness-0 invert">
            <span class="hidden md:inline-block text-lg font-bold text-white tracking-tight">Kindreal</span>
        </a>
        
        <!-- Glassmorphism Menu (Center - Desktop Only) -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-white/20 backdrop-blur-md border border-white/20 rounded-full p-1.5">
                <li>
                    <a href="index.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                        Home
                    </a>
                </li>
                <!-- Active: Blog -->
                <li>
                    <a href="blog.php" class="bg-white text-black rounded-full px-6 py-2 font-medium text-sm transition-all duration-300 hover:bg-gray-100">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="about.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                        Why Kindreal
                    </a>
                </li>
                <li>
                    <a href="contact.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Right Side: Hamburger -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <!-- Hamburger Menu Button (Mobile Only) -->
            <button id="mobileMenuBtn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50">
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black/40 opacity-0 invisible transition-all duration-500 ease-in-out z-40 lg:hidden"></div>

    <!-- Mobile Navigation Dropdown - From Top (Same as Landing Page) -->
    <div id="mobileMenu" class="fixed top-0 left-0 right-0 w-full bg-white rounded-b-3xl shadow-2xl transform -translate-y-full transition-transform duration-500 ease-in-out z-50 lg:hidden overflow-hidden max-h-[90vh]">
        <!-- Drawer Content -->
        <div class="relative flex flex-col">
            
            <!-- Header: Logo + Close Button -->
            <div class="flex justify-between items-center p-6 md:p-8">
                <div class="flex items-center gap-2">
                    <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 w-auto">
                    <span class="text-xl font-bold text-gray-900 tracking-tight">Kindreal</span>
                </div>
                <button id="closeMobileMenu" class="w-10 h-10 flex items-center justify-center text-gray-600 hover:text-gray-900 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Navigation List -->
            <nav class="flex flex-col gap-4 md:gap-6 px-6 md:p-8 py-4 pb-6">
                <a href="index.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                    Home
                </a>
                <a href="blog.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                    Blog
                </a>
                <a href="about.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                    Why Kindreal
                </a>
                <a href="contact.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                    Contact Us
                </a>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 pt-32 pb-20">
        <div class="text-center mb-16">
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-light text-white mb-6 leading-tight">
                Insights & <br><span class="font-bold gradient-text">Inspiration</span>
            </h1>
            <p class="text-xl text-white/60 max-w-2xl mx-auto">
                Expert perspectives on real estate, architecture, and lifestyle in Nigeria's capital
            </p>
        </div>

        <!-- Featured Post -->
        <div class="relative rounded-3xl overflow-hidden group mb-20 shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-blue-900/20 z-10"></div>
            <img src="https://kindreal-properties.com/images/banner/banner-property-6.jpg" alt="Featured" class="w-full h-[600px] object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
            
            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 z-30">
                <div class="flex items-center gap-4 mb-6">
                    <span class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-2 rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">Featured</span>
                    <span class="text-white/60 text-sm font-medium">January 15, 2026</span>
                    <?php if ($isAdmin): ?>
                    <a href="/admin/edit-post.php?slug=featured-post" class="ml-auto bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full text-xs font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit
                    </a>
                    <?php endif; ?>
                </div>
                <h2 class="text-4xl md:text-5xl font-light text-white mb-4 max-w-3xl">
                    The Future of Real Estate in Nigeria: <span class="font-bold gradient-text">Trends to Watch</span>
                </h2>
                <p class="text-lg text-white/70 max-w-2xl mb-6">
                    Discover how modern architecture and strategic locations are transforming the way people live and invest in the Federal Capital Territory.
                </p>
                <a href="#" class="inline-flex items-center gap-3 text-white font-bold uppercase tracking-widest text-sm group/btn">
                    Read Article
                    <span class="w-10 h-10 rounded-full bg-white/10 border border-white/20 flex items-center justify-center transition-all duration-300 group-hover/btn:bg-white group-hover/btn:text-black">
                        →
                    </span>
                </a>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="mb-12">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-3xl font-light text-white">Latest <span class="gradient-text font-bold">Articles</span></h3>
                <div class="flex gap-3">
                    <button class="px-5 py-2 bg-white/10 backdrop-blur-md border border-white/10 rounded-full text-white text-sm font-medium hover:bg-white/20 transition-all">All</button>
                    <button class="px-5 py-2 bg-white/5 border border-white/5 rounded-full text-white/60 text-sm hover:bg-white/10 hover:text-white transition-all">Investment</button>
                    <button class="px-5 py-2 bg-white/5 border border-white/5 rounded-full text-white/60 text-sm hover:bg-white/10 hover:text-white transition-all">Lifestyle</button>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
                
                <!-- Article 1 -->
                <article class="article-card group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden shadow-xl">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img src="https://kindreal-properties.com/images/banner/item1.jpg" alt="Post" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase shadow-lg">Investment</span>
                        </div>
                        <?php if ($isAdmin): ?>
                        <a href="/admin/edit-post.php?slug=katampe-post" class="absolute top-4 right-4 bg-white/10 backdrop-blur-md border border-white/20 text-white p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-white/40 uppercase tracking-wider mb-3">
                            <span>Jan 15, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h4 class="text-xl font-semibold text-white mb-3 group-hover:gradient-text transition-all">
                            Why Katampe is the Next Big Thing in Abuja Real Estate
                        </h4>
                        <p class="text-white/60 line-clamp-2 text-sm mb-4">
                            Exploring the rapid expansion and premium value of properties along the Katampe road corridor.
                        </p>
                        <a href="/blog-post.php?slug=katampe-investment" class="inline-flex items-center gap-2 text-white font-semibold text-sm group/link">
                            Read More
                            <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="article-card group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden shadow-xl">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img src="https://kindreal-properties.com/images/banner/item2.jpg" alt="Post" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-purple-500 to-purple-600 text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase shadow-lg">Architecture</span>
                        </div>
                        <?php if ($isAdmin): ?>
                        <a href="/admin/edit-post.php?slug=interior-post" class="absolute top-4 right-4 bg-white/10 backdrop-blur-md border border-white/20 text-white p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-white/40 uppercase tracking-wider mb-3">
                            <span>Jan 12, 2026</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h4 class="text-xl font-semibold text-white mb-3 group-hover:gradient-text transition-all">
                            Modern Interior Trends: Creating Spaces That Inspire
                        </h4>
                        <p class="text-white/60 line-clamp-2 text-sm mb-4">
                            How to blend modern architecture with comfortable living spaces for your family.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-semibold text-sm group/link">
                            Read More
                            <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="article-card group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden shadow-xl">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img src="https://kindreal-properties.com/images/banner/img-w-text2.jpg" alt="Post" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase shadow-lg">Lifestyle</span>
                        </div>
                        <?php if ($isAdmin): ?>
                        <a href="/admin/edit-post.php?slug=buyer-guide-post" class="absolute top-4 right-4 bg-white/10 backdrop-blur-md border border-white/20 text-white p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-white/40 uppercase tracking-wider mb-3">
                            <span>Jan 10, 2026</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h4 class="text-xl font-semibold text-white mb-3 group-hover:gradient-text transition-all">
                            Finding Your Dream Home: A First-Time Buyer's Guide
                        </h4>
                        <p class="text-white/60 line-clamp-2 text-sm mb-4">
                            Everything you need to know about navigating the FCT property market without the hassle.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-semibold text-sm group/link">
                            Read More
                            <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <!-- Load More -->
        <div class="text-center mt-16">
            <button class="group relative px-10 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/50">
                <span class="relative z-10">Load More Articles</span>
            </button>
        </div>

    </div>

    <!-- Admin Login Button -->
    <a href="/admin/login.php" class="fixed bottom-6 left-6 z-40 flex items-center gap-2 px-5 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-semibold hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:border-transparent transition-all shadow-lg hover:shadow-xl group">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
        </svg>
        <span>Admin Login</span>
    </a>

</section>

<script>
// Mobile menu
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const closeMobileMenu = document.getElementById('closeMobileMenu');
const mobileMenu = document.getElementById('mobileMenu');
const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

function openMobileMenu() {
    mobileMenu.classList.remove('translate-x-full');
    mobileMenuOverlay.classList.remove('opacity-0', 'invisible');
    mobileMenuOverlay.classList.add('opacity-100', 'visible');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenuFunc() {
    mobileMenu.classList.add('translate-x-full');
    mobileMenuOverlay.classList.add('opacity-0', 'invisible');
    mobileMenuOverlay.classList.remove('opacity-100', 'visible');
    document.body.style.overflow = '';
}

mobileMenuBtn?.addEventListener('click', openMobileMenu);
closeMobileMenu?.addEventListener('click', closeMobileMenuFunc);
mobileMenuOverlay?.addEventListener('click', closeMobileMenuFunc);

// GSAP Animations
document.addEventListener('DOMContentLoaded', () => {
    gsap.from('.article-card', {
        y: 60,
        opacity: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: 'power3.out'
    });
});
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>

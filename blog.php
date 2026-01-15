<?php
include 'includes/header.php';
?>

<!-- Blog Page -->
<section class="relative w-full min-h-screen bg-white">
    
    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight hover:opacity-90 transition relative z-50">
            EverGreen
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-gray-100/80 backdrop-blur-md border border-gray-200 rounded-full p-1.5">
                <li><a href="index.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="about.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">About</a></li>
                <li><a href="projects.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Projects</a></li>
                <li><a href="services.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Services</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="buy-template.php" class="hidden md:inline-block bg-gray-900 text-white px-4 md:px-5 py-2 rounded-md text-sm font-medium hover:bg-gray-800 transition">Buy template</a>
            <button id="mobileMenuBtn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50">
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
            </button>
        </div>
    </nav>
    
    <!-- Hero Content -->
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20">
        <div class="text-center space-y-8" data-reveal="fade-up">
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight text-gray-900">
                Design Insights & Ideas
            </h1>
            
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Explore our latest articles, trends, and expert insights on interior design, architecture, and creative spaces.
            </p>
            
        </div>
    </div>
    
</section>

<!-- Blog Posts Grid -->
<section class="w-full bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Blog Post 1 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="0">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Interior Design</span>
                        <span>•</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Minimalist Living: Less is More</h3>
                    <p class="text-gray-600 mb-4">Discover how minimalist design principles can transform your living space into a serene sanctuary.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
            <!-- Blog Post 2 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="150">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Architecture</span>
                        <span>•</span>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Sustainable Architecture for 2024</h3>
                    <p class="text-gray-600 mb-4">Exploring eco-friendly building practices and materials for a greener future.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
            <!-- Blog Post 3 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="300">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Design Trends</span>
                        <span>•</span>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Color Palettes That Transform Spaces</h3>
                    <p class="text-gray-600 mb-4">How to choose the perfect color scheme for your next interior design project.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
            <!-- Blog Post 4 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="450">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Renovation</span>
                        <span>•</span>
                        <span>8 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Kitchen Renovation: Where to Start</h3>
                    <p class="text-gray-600 mb-4">Essential tips and planning strategies for a successful kitchen remodel.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
            <!-- Blog Post 5 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="600">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Commercial</span>
                        <span>•</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Designing Productive Office Spaces</h3>
                    <p class="text-gray-600 mb-4">Creating work environments that boost creativity and collaboration.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
            <!-- Blog Post 6 -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-reveal="fade-up" data-reveal-delay="750">
                <div class="aspect-video bg-gray-200 overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 group-hover:scale-110 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>Residential</span>
                        <span>•</span>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Smart Home Integration Made Simple</h3>
                    <p class="text-gray-600 mb-4">Seamlessly incorporating technology into your home design without sacrificing aesthetics.</p>
                    <a href="#" class="text-sm font-medium text-black hover:underline">Read more →</a>
                </div>
            </article>
            
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>

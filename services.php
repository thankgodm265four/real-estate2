<?php
include 'includes/header.php';
?>

<!-- Services Page -->
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
                <li><a href="services.php" class="bg-gray-900 text-white rounded-full px-6 py-2 font-medium text-sm transition-all duration-300">Services</a></li>
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
                Our Services
            </h1>
            
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                From concept to completion, we offer comprehensive design and construction services tailored to your unique vision and needs.
            </p>
            
        </div>
    </div>
    
</section>

<!-- Services Grid -->
<section class="w-full bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="0">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Interior Design</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Creating stunning, functional spaces that reflect your unique style and enhance your daily living experience.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="150">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Architecture</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Innovative architectural solutions that blend form and function, creating timeless structures built to last.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="300">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Project Management</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">End-to-end project oversight ensuring quality, timeline adherence, and seamless execution from start to finish.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="450">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Residential</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Transform your home with custom designs that perfectly balance aesthetics, functionality, and comfort.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="600">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Commercial</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Professional spaces designed to inspire productivity and leave a lasting impression on clients and employees.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="750">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Renovation</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Breathe new life into existing spaces with expert renovation services that modernize and enhance value.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Learn more →</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="w-full bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-6 md:px-12 text-center">
        <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-reveal="fade-up">
            Let's Bring Your Vision to Life
        </h2>
        <p class="text-lg text-white/70 mb-8" data-reveal="fade-up" data-reveal-delay="100">
            Schedule a consultation with our expert team to discuss your project.
        </p>
        <a href="contact.php" class="inline-block bg-white text-black px-8 py-3 rounded-lg text-sm font-medium hover:bg-gray-100 transition-all duration-300 hover:scale-105 shadow-lg" data-reveal="fade-up" data-reveal-delay="200">
            Book a Consultation
        </a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>

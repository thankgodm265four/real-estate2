<?php
include 'includes/header.php';
?>

<!-- Buy Template Page -->
<section class="relative w-full min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#1a1a1a] to-[#0a0a0a] text-white">
    
    <!-- Navigation Bar (Dark) -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 relative z-50 group">
            <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 w-auto filter brightness-0 invert">
            <span class="text-xl font-bold text-white tracking-tight">Kindreal</span>
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-white/20 backdrop-blur-md border border-white/20 rounded-full p-1.5">
                <li><a href="index.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="blog.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Blog</a></li>
                <li><a href="about.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Why Kindreal</a></li>
                <li><a href="contact.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Contact Us</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="tel:+2347032291977" class="hidden md:flex items-center gap-2 text-white/90 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-sm font-medium">+234 703 229 1977</span>
            </a>
            <button id="mobileMenuBtn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50">
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
            </button>
        </div>
    </nav>
    
    <!-- Hero Content -->
    <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20">
        <div class="text-center space-y-8 mb-16" data-reveal="fade-up">
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight">
                Get This Template
            </h1>
            
            <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-3xl mx-auto">
                Professional, modern, and fully responsive real estate website template. Perfect for real estate agencies, architecture firms, and interior design businesses.
            </p>
            
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            
            <!-- Basic Plan -->
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300" data-reveal="fade-up" data-reveal-delay="0">
                <h3 class="text-2xl font-bold mb-2">Basic</h3>
                <div class="text-4xl font-bold mb-6">$49</div>
                <ul class="space-y-3 mb-8 text-white/80">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        HTML/CSS/JS Files
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Responsive Design
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        6 Months Support
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Documentation
                    </li>
                </ul>
                <button class="w-full bg-white text-black px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-all duration-300">
                    Purchase Now
                </button>
            </div>
            
            <!-- Pro Plan -->
            <div class="bg-white text-black rounded-2xl p-8 transform md:scale-105 shadow-2xl relative" data-reveal="fade-up" data-reveal-delay="150">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-green-400 to-blue-500 text-white px-4 py-1 rounded-full text-sm font-bold">
                    POPULAR
                </div>
                <h3 class="text-2xl font-bold mb-2">Pro</h3>
                <div class="text-4xl font-bold mb-6">$99</div>
                <ul class="space-y-3 mb-8 text-gray-700">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Basic
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        PHP Backend
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        3D Animations
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        12 Months Support
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Free Updates
                    </li>
                </ul>
                <button class="w-full bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition-all duration-300">
                    Purchase Now
                </button>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300" data-reveal="fade-up" data-reveal-delay="300">
                <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                <div class="text-4xl font-bold mb-6">$199</div>
                <ul class="space-y-3 mb-8 text-white/80">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Pro
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom Features
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Priority Support
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Lifetime Updates
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        1-on-1 Setup Help
                    </li>
                </ul>
                <button class="w-full bg-white text-black px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-all duration-300">
                    Purchase Now
                </button>
            </div>
            
        </div>
        
        <!-- Features List -->
        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 md:p-12" data-reveal="fade-up">
            <h2 class="text-3xl font-bold mb-8 text-center">What's Included</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6 text-white/80">
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Fully Responsive Design (Mobile, Tablet, Desktop)</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Modern Glassmorphism Effects</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Advanced 3D Animations & Tilt Effects</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Clean, Well-Documented Code</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Multiple Page Templates</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Easy Customization with Tailwind CSS</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Contact Forms & Interactive Elements</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Regular Updates & Bug Fixes</span>
                </li>
            </ul>
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

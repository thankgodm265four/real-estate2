<?php
include 'includes/header.php';
?>

<!-- Services Page -->
<section class="relative w-full min-h-screen bg-white">
    
    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 relative z-50 group">
            <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 w-auto">
            <span class="text-xl font-bold text-gray-900 tracking-tight">Kindreal</span>
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-gray-100/80 backdrop-blur-md border border-gray-200 rounded-full p-1.5">
                <li><a href="index.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="blog.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Blog</a></li>
                <li><a href="about.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Why Kindreal</a></li>
                <li><a href="contact.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Contact Us</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="tel:+2347032291977" class="hidden md:flex items-center gap-2 text-gray-700 hover:text-gray-900 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-sm font-medium">+234 703 229 1977</span>
            </a>
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
                Nigeria's No.1 real estate company providing high quality, sustainable, and innovative solutions that enhance communities.
            </p>
            
        </div>
    </div>
    
</section>

<!-- Services Grid -->
<section class="w-full bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Buy A New Home -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="0">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Buy A New Home</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Explore diverse properties and expert guidance for a seamless buying experience tailored to your needs.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Get started →</a>
                </div>
            </div>
            
            <!-- Service 2: Rent a Home -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="150">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Rent a Home</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">A diverse variety of listings tailored precisely to suit your unique lifestyle and budget requirements.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Find a rental →</a>
                </div>
            </div>
            
            <!-- Service 3: Sell a Home -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="300">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sell a Home</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Showcase your property features for a successful and profitable sale on our premium platform.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">List property →</a>
                </div>
            </div>
            
            <!-- Service 4: Property Management -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="450">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Property Management</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Professional and attentive management of real estate assets to ensure maximum value and peace of mind.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Our approach →</a>
                </div>
            </div>
            
            <!-- Service 5: Real Estate Investment -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="600">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Real Estate Investment</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Helping clients acquire property and build wealth in strategic locations with high growth potential.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Invest now →</a>
                </div>
            </div>
            
            <!-- Service 6: Consultancy -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="750">
                <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Consultancy</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Expert advice on FCT land matters, paperwork, and finding properties that match your specific needs.</p>
                    <a href="contact.php" class="text-sm font-medium text-black hover:underline">Book session →</a>
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

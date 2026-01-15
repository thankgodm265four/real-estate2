<?php
include 'includes/header.php';
?>

<!-- About Hero Section - Dark Background -->
<section class="relative w-full min-h-screen bg-[#0a0a0a] text-white">
    
    <!-- Navigation Bar (Dark) - Sticky -->
    <nav id="mainNav" class="fixed top-0 left-0 right-0 flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 z-50 transition-all duration-300">
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
                <li><a href="about.php" class="bg-white text-black rounded-full px-6 py-2 font-medium text-sm transition-all duration-300">Why Kindreal</a></li>
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
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Content -->
            <div class="space-y-8" data-reveal="fade-right">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight">
                    Nigeria's No.1<br>
                    Real Estate Company
                </h1>
                
                <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-xl">
                    We offer homes that inspire greatness. Modern architecture, exclusive locations, and comfortable homes designed to inspire you and your family.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="bg-white text-black px-8 py-3 rounded-lg text-sm font-medium hover:bg-gray-100 transition-all duration-300 hover:scale-105 shadow-lg">
                        Book a Consultation
                    </a>
                    <a href="#" class="bg-white/10 backdrop-blur-sm text-white px-8 py-3 rounded-lg text-sm font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        Learn more
                    </a>
                </div>
                
                <!-- Partners Section -->
                <div class="pt-12">
                    <p class="text-sm text-white/50 mb-6 uppercase tracking-wider">Our partners</p>
                    <div class="flex flex-wrap items-center gap-8">
                        <div class="flex items-center gap-2 text-white/70 hover:text-white transition-colors duration-300">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 2L12 12L17 7Z"/>
                            </svg>
                            <span class="text-sm font-medium">Logoipsum</span>
                        </div>
                        <div class="flex items-center gap-2 text-white/70 hover:text-white transition-colors duration-300">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                                <rect x="8" y="8" width="8" height="8"/>
                            </svg>
                            <span class="text-sm font-medium">Logoipsum</span>
                        </div>
                        <div class="flex items-center gap-2 text-white/70 hover:text-white transition-colors duration-300">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                                <polygon points="12,5 15,12 12,19 9,12"/>
                            </svg>
                            <span class="text-sm font-medium">Logoipsum</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative" data-reveal="fade-left" data-reveal-delay="200">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl" data-tilt data-tilt-max="5" data-tilt-perspective="2000">
                    <img 
                        src="https://kindreal-properties.com/images/banner/img-w-text2.jpg" 
                        alt="Kindreal Properties Showcase" 
                        class="w-full h-auto object-cover"
                        style="aspect-ratio: 4/3;"
                    >
                    <div class="absolute inset-0 bg-gradient-to-br from-black/10 to-transparent"></div>
                </div>
            </div>
            
        </div>
    </div>
    
</section>

<!-- Our Story Section -->
<?php include 'sections/about.php'; ?>

<!-- Success Metrics -->
<?php include 'sections/success-section.php'; ?>

<!-- Team/Services Section -->
<section class="w-full bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <div class="text-center mb-16" data-reveal="fade-up">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-6">
                Our Expertise
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                From concept to completion, we deliver exceptional results across all aspects of design and construction.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Service 1 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="0">
                <div class="bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover:shadow-xl" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Home Buying</h3>
                    <p class="text-gray-600 leading-relaxed">Expert guidance for a seamless buying experience in Abuja's most exclusive locations.</p>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="150">
                <div class="bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover:shadow-xl" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Management</h3>
                    <p class="text-gray-600 leading-relaxed">Professional and attentive management of real estate assets to ensure lasting value.</p>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="group" data-reveal="fade-up" data-reveal-delay="300">
                <div class="bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover:shadow-xl" data-tilt data-tilt-max="3">
                    <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Investment</h3>
                    <p class="text-gray-600 leading-relaxed">Helping clients build wealth through strategic property acquisition in prime locations.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Team Section -->
<?php include 'sections/team-section.php'; ?>

<!-- Image Showcase -->
<?php include 'sections/image-showcase.php'; ?>

<!-- FAQ Section -->
<?php include 'sections/faq-section.php'; ?>

<!-- Sticky Navbar Styles & JavaScript -->
<style>
    /* Navbar scrolled state with glassmorphism */
    #mainNav.scrolled {
        background: rgba(10, 10, 10, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    
    /* Adjust hero section top padding to account for fixed nav */
    section:first-of-type {
        padding-top: 5rem;
    }
</style>

<script>
    // Sticky navbar on scroll
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('mainNav');
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
</script>

<?php
include 'includes/footer.php';
?>

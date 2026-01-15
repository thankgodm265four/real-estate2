<?php
include 'includes/header.php';
?>

<!-- Projects Page -->
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
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20">
        <div class="text-center space-y-8" data-reveal="fade-up">
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight">
                Our Projects
            </h1>
            
            <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-3xl mx-auto">
                Exceptional spaces that inspire and endure. Explore our diverse portfolio of residential and commercial properties across Nigeria.
            </p>
            
        </div>
    </div>
    
</section>

<!-- Projects Grid Section -->
<?php include 'sections/projects-section.php'; ?>

<!-- CTA Section -->
<section class="w-full bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-6 md:px-12 text-center">
        <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-reveal="fade-up">
            Ready to Start Your Project?
        </h2>
        <p class="text-lg text-white/70 mb-8" data-reveal="fade-up" data-reveal-delay="100">
            Let's transform your vision into reality. Book a consultation with our expert team today.
        </p>
        <a href="contact.php" class="inline-block bg-white text-black px-8 py-3 rounded-lg text-sm font-medium hover:bg-gray-100 transition-all duration-300 hover:scale-105 shadow-lg" data-reveal="fade-up" data-reveal-delay="200">
            Book a Consultation
        </a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>

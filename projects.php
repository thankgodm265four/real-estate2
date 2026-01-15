<?php
include 'includes/header.php';
?>

<!-- Projects Page -->
<section class="relative w-full min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#1a1a1a] to-[#0a0a0a] text-white">
    
    <!-- Navigation Bar (Dark) -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="text-xl md:text-2xl lg:text-3xl font-bold text-white tracking-tight hover:opacity-90 transition relative z-50">
            EverGreen
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-white/20 backdrop-blur-md border border-white/20 rounded-full p-1.5">
                <li><a href="index.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="about.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">About</a></li>
                <li><a href="projects.php" class="bg-white text-black rounded-full px-6 py-2 font-medium text-sm transition-all duration-300">Projects</a></li>
                <li><a href="services.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">Services</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="buy-template.php" class="hidden md:inline-block bg-white text-gray-900 px-4 md:px-5 py-2 rounded-md text-sm font-medium hover:bg-gray-100 transition">Buy template</a>
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
                Explore our portfolio of stunning residential and commercial spaces that showcase our commitment to excellence and innovative design.
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

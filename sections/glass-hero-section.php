<?php
/**
 * Split Glass Hero Section
 * Two frosted glass cards over a luxury interior background
 */
?>

<!-- Split Glass Hero Section -->
<section class="relative min-h-screen w-full overflow-hidden bg-cover bg-center" style="background-image: url('assets/images/hero-glass-bg.jpg');">
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/30"></div>
    
    <!-- Main Content Container -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-20">
        
        <!-- Two Glass Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-7xl w-full">
            
            <!-- Card 1: Our Project -->
            <div class="glass-card backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-12 md:p-16 flex flex-col justify-end h-[500px] hover:bg-white/15 transition-all duration-500">
                <div>
                    <!-- Label -->
                    <p class="text-gray-200 uppercase text-xs tracking-wider mb-4">
                        Our Project
                    </p>
                    
                    <!-- Headline -->
                    <h2 class="text-white text-4xl md:text-5xl lg:text-6xl font-light leading-tight mb-8">
                        Your idea<br>
                        our expertise
                    </h2>
                    
                    <!-- CTA Button -->
                    <a href="#" class="inline-block bg-white text-black px-6 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 font-medium text-sm">
                        See Explore Our Services
                    </a>
                </div>
            </div>
            
            <!-- Card 2: Contact Us -->
            <div class="glass-card backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-12 md:p-16 flex flex-col justify-end h-[500px] hover:bg-white/15 transition-all duration-500">
                <div>
                    <!-- Label -->
                    <p class="text-gray-200 uppercase text-xs tracking-wider mb-4">
                        Contact Us
                    </p>
                    
                    <!-- Headline -->
                    <h2 class="text-white text-4xl md:text-5xl lg:text-6xl font-light leading-tight mb-8">
                        Let's begin<br>
                        in the experience
                    </h2>
                    
                    <!-- CTA Button -->
                    <a href="#" class="inline-block bg-white text-black px-6 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 font-medium text-sm">
                        Get in touch
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
    
</section>

<style>
/* Additional glass effect enhancement */
.glass-card {
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
}

.glass-card:hover {
    box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.25);
}
</style>

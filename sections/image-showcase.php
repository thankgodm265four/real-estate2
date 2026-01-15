<?php
/**
 * Full-Width Image Showcase Section
 * Clean minimal design with full-width interior image
 */
?>

<section class="w-full bg-[#F8F8F8] py-8 md:py-12 lg:py-16" style="perspective: 1500px;">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Full-Width Image Container with 3D Effects -->
        <div 
            class="relative w-full overflow-hidden rounded-2xl md:rounded-3xl shadow-2xl group"
            data-tilt
            data-tilt-max="5"
            data-tilt-perspective="2000"
            data-tilt-scale="1.02"
            data-reveal="zoom-in"
            style="transform-style: preserve-3d;"
        >
            <!-- Parallax Image Layer -->
            <div 
                class="relative"
                data-parallax="0.3"
                style="transform-style: preserve-3d;"
            >
                <img 
                    src="assets/images/interior-showcase.jpg" 
                    alt="Minimalist interior design showcase" 
                    class="w-full h-auto object-cover transition-all duration-700 ease-out group-hover:scale-110"
                    style="aspect-ratio: 21/9; transform: translateZ(20px);"
                >
            </div>
            
            <!-- 3D Depth Overlay -->
            <div 
                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                style="transform: translateZ(30px);"
            ></div>
            
            <!-- Floating Accent Element -->
            <div 
                class="absolute bottom-8 right-8 bg-white/90 backdrop-blur-sm px-6 py-4 rounded-xl shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-500"
                data-float
                data-float-distance="8"
                data-float-duration="2.5"
                style="transform: translateZ(50px);"
            >
                <p class="text-sm font-medium text-gray-800">Premium Interior Design</p>
            </div>
        </div>

    </div>
</section>

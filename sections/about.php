<?php
// About section - Clean minimal design (Luzen style)
// Updated to match new minimalist design
?>

<!-- About Us Section -->
<section class="w-full bg-[#f5f3ed] py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 mb-12 md:mb-16">
            
            <!-- Left: Section Label -->
            <div class="lg:col-span-3" data-reveal="fade-right">
                <div class="flex items-start gap-2 mb-2">
                    <h2 
                        class="text-6xl md:text-7xl lg:text-8xl font-light text-black leading-none"
                        data-float
                        data-float-distance="15"
                        data-float-duration="3.5"
                    >01</h2>
                </div>
                <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider">About us</p>
            </div>
            
            <!-- Right: Headline with Tagline -->
            <div class="lg:col-span-9 space-y-4" data-reveal="fade-left" data-reveal-delay="200">
                <h3 class="text-4xl md:text-5xl lg:text-6xl font-light text-black leading-tight">
                    Homes that<br>inspire greatness.
                </h3>
                <p class="text-sm md:text-base text-gray-500 max-w-md">
                    Nigeria's No.1 real estate company<br>servicing clients across Africa.
                </p>
            </div>
            
        </div>

        <!-- Two-Column Content with Images -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            
            <!-- Empty space to align -->
            <div class="hidden lg:block lg:col-span-3"></div>
            
            <!-- Content Columns -->
            <div class="lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    
                    <!-- Left Column: Text + Image -->
                    <div class="space-y-6" data-reveal="fade-up" data-reveal-delay="0">
                        <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                            Welcome to Kindreal Properties. Here, we turn houses into homes and dreams into reality. We perfectly understand that your home is more than just a physical space, it's a place where memories are created.
                        </p>
                        
                        <!-- Image 1 -->
                        <div class="relative rounded-lg overflow-hidden group" data-tilt data-tilt-max="3">
                            <div class="aspect-[4/5] bg-gradient-to-br from-gray-200 to-gray-300">
                                <img 
                                    src="https://kindreal-properties.com/images/banner/item1.jpg" 
                                    alt="Kindreal Properties Interior" 
                                    class="w-full h-full object-cover opacity-0"
                                    onerror="this.style.opacity=0"
                                    onload="this.style.opacity=1"
                                >
                            </div>
                            <div class="absolute bottom-4 left-4 text-xs text-white/80">Kindreal's 001</div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Image + Text -->
                    <div class="space-y-6" data-reveal="fade-up" data-reveal-delay="150">
                        <!-- Image 2 -->
                        <div class="relative rounded-lg overflow-hidden group" data-tilt data-tilt-max="3">
                            <div class="aspect-[4/3] bg-gradient-to-br from-gray-300 to-gray-400">
                                <img 
                                    src="https://kindreal-properties.com/images/banner/item2.jpg" 
                                    alt="Kindreal Properties Interior" 
                                    class="w-full h-full object-cover opacity-0"
                                    onerror="this.style.opacity=0"
                                    onload="this.style.opacity=1"
                                >
                            </div>
                        </div>
                        
                        <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                            We aim to provide high quality, sustainable, and innovative real estate solutions that enhance communities and create lasting value for our client, investors, and stakeholders. We are committed to integrity, excellence and customer satisfaction.
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>

    </div>
</section>

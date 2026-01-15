<?php
/**
 * Success Section
 * Section 02 - Clean minimal design matching About section style
 */
?>

<section class="w-full bg-[#f5f3ed] py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Top Row: Section Number + Headline -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 mb-12 md:mb-16">
            
            <!-- Left: Section Number -->
            <div class="lg:col-span-3" data-reveal="fade-right">
                <div class="flex items-start gap-2 mb-2">
                    <h2 
                        class="text-6xl md:text-7xl lg:text-8xl font-light text-black leading-none"
                        data-float
                        data-float-distance="15"
                        data-float-duration="3.5"
                    >02</h2>
                </div>
                <p class="text-xs md:text-sm text-gray-600 uppercase tracking-wider">Our success</p>
            </div>
            
            <!-- Right: Headline -->
            <div class="lg:col-span-9" data-reveal="fade-left" data-reveal-delay="200">
                <h3 class="text-4xl md:text-5xl lg:text-6xl font-light text-black leading-tight">
                    Our success is driven by innovation, operational excellence, and a strong commitment to our client.
                </h3>
            </div>
            
        </div>

        <!-- Two-Column Content with Images (matching About section style) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            
            <!-- Empty space to align -->
            <div class="hidden lg:block lg:col-span-3"></div>
            
            <!-- Content Columns -->
            <div class="lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    
                    <!-- Left Column: Text + Image -->
                    <div class="space-y-6" data-reveal="fade-up" data-reveal-delay="0">
                        <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                            We're proud to have earned the trust of over 250 clients across residential and commercial projects. Our commitment to quality and attention to detail sets us apart.
                        </p>
                        
                        <!-- Image 1 -->
                        <div class="relative rounded-lg overflow-hidden group" data-tilt data-tilt-max="3">
                            <div class="aspect-[4/5] bg-gradient-to-br from-gray-200 to-gray-300">
                                <img 
                                    src="assets/images/project-1.jpg" 
                                    alt="Modern architectural project" 
                                    class="w-full h-full object-cover opacity-0"
                                    onerror="this.style.opacity=0"
                                    onload="this.style.opacity=1"
                                >
                            </div>
                            <div class="absolute bottom-4 left-4 text-xs text-white/80">Project 001</div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Image + Text -->
                    <div class="space-y-6" data-reveal="fade-up" data-reveal-delay="150">
                        <!-- Image 2 -->
                        <div class="relative rounded-lg overflow-hidden group" data-tilt data-tilt-max="3">
                            <div class="aspect-[4/3] bg-gradient-to-br from-gray-300 to-gray-400">
                                <img 
                                    src="assets/images/project-2.jpg" 
                                    alt="Interior design excellence" 
                                    class="w-full h-full object-cover opacity-0"
                                    onerror="this.style.opacity=0"
                                    onload="this.style.opacity=1"
                                >
                            </div>
                        </div>
                        
                        <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                            With over 90 completed projects and a portfolio valued at over $5.5M, we bring years of experience and a proven track record to every collaboration. From concept to completion, we're with you every step.
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>

    </div>
</section>

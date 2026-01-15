<?php
/**
 * Projects Section (03)
 * Dark-themed section with project showcase cards
 */

$projects = [
    [
        'title' => 'Modern Office Design',
        'image' => 'assets/images/project-office.jpg',
        'link' => '#'
    ],
    [
        'title' => 'Modern Loft Design',
        'image' => 'assets/images/project-loft.jpg',
        'link' => '#'
    ],
    [
        'title' => 'Modern Kitchen Design',
        'image' => 'assets/images/project-kitchen.jpg',
        'link' => '#'
    ],
    [
        'title' => 'Modern Workspace Design',
        'image' => 'assets/images/project-workspace.jpg',
        'link' => '#'
    ]
];
?>

<section class="w-full bg-[#0a0a0a] text-white py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Top Section: Headline + Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 mb-16 md:mb-20">
            
            <!-- Left: Headline -->
            <div data-reveal="fade-right">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-white leading-tight">
                    Expert guidance and solutions for your project stages
                </h2>
            </div>
            
            <!-- Right: Description + Button + Section Number -->
            <div class="flex flex-col justify-between" data-reveal="fade-left" data-reveal-delay="200">
                <div class="mb-8">
                    <!-- Section Number -->
                    <div class="flex justify-end mb-6">
                        <div class="text-right" data-float data-float-distance="12" data-float-duration="4">
                            <p class="text-xs text-white/60 uppercase tracking-wider mb-1">Projects</p>
                            <h3 class="text-6xl md:text-7xl lg:text-8xl font-light">03</h3>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <p class="text-base md:text-lg text-white/80 leading-relaxed mb-8">
                        Discover our featured works showcasing our expertise and passion in every project. Let <span class="text-white font-medium">these stories</span> inspire your next venture!
                    </p>
                    
                    <!-- Learn More Button -->
                    <a href="#" class="inline-block bg-white text-black px-8 py-3 rounded-md text-sm font-medium hover:bg-gray-100 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        Learn More
                    </a>
                </div>
            </div>
            
        </div>

        <!-- Projects Grid with 3D Effects -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            
            <?php foreach ($projects as $index => $project): ?>
                <div 
                    class="project-card group cursor-pointer"
                    data-tilt
                    data-tilt-max="10"
                    data-tilt-perspective="1500"
                    data-tilt-scale="1.03"
                    data-reveal="fade-up"
                    data-reveal-delay="<?= $index * 150 ?>"
                    style="transform-style: preserve-3d;"
                >
                    <!-- Project Image with 3D Depth -->
                    <div class="relative overflow-hidden rounded-2xl mb-6 aspect-[4/3]" style="transform: translateZ(20px);">
                        <img 
                            src="<?= $project['image'] ?>" 
                            alt="<?= $project['title'] ?>" 
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                        >
                        <!-- 3D Depth Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="transform: translateZ(10px);"></div>
                        
                        <!-- Floating Badge -->
                        <div 
                            class="absolute top-4 right-4 bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500"
                            data-float
                            data-float-distance="6"
                            data-float-duration="3"
                            style="transform: translateZ(40px);"
                        >
                            <span class="text-xs text-white font-medium">Featured</span>
                        </div>
                    </div>
                    
                    <!-- Project Info with Depth -->
                    <div class="flex items-center justify-between" style="transform: translateZ(30px);">
                        <h4 class="text-xl md:text-2xl font-light text-white transition-transform duration-300 group-hover:translate-x-2">
                            <?= $project['title'] ?>
                        </h4>
                        <a href="<?= $project['link'] ?>" class="text-sm text-white/80 hover:text-white transition-all duration-300 underline underline-offset-4 hover:underline-offset-8">
                            View project →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>

    </div>
</section>

<script>
// Add smooth hover animations to project cards
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        const projectCards = document.querySelectorAll('.project-card');
        
        projectCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    y: -8,
                    duration: 0.4,
                    ease: "power2.out"
                });
            });
            
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    y: 0,
                    duration: 0.4,
                    ease: "power2.out"
                });
            });
        });
    }
});
</script>

<?php
/**
 * Events Section (04)
 * Light-themed section with events and achievements showcase
 */

$events = [
    [
        'number' => '01',
        'title' => 'Present new objectives and new talents.',
        'date' => 'Sep 15, 2024',
        'image' => 'assets/images/event-1.jpg'
    ],
    [
        'number' => '02',
        'title' => 'Present new objectives and new talents.',
        'date' => 'Sep 15, 2024',
        'image' => 'assets/images/event-2.jpg'
    ]
];
?>

<section class="w-full bg-white py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Main Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Column: Headline + Description + Section Number -->
            <div class="lg:col-span-5">
                <!-- Headline -->
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-black leading-tight mb-8">
                    Discover our recent events and achievements
                </h2>
                
                <!-- Description -->
                <p class="text-sm md:text-base text-gray-600 leading-relaxed mb-12">
                    Stay updated on milestones and activities. Recent events show our dedication to growth and creativity.
                </p>
                
                <!-- Section Number -->
                <div class="flex items-baseline gap-2">
                    <h3 class="text-7xl md:text-8xl lg:text-9xl font-light text-black">04</h3>
                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-2">Events</p>
                </div>
            </div>
            
            <!-- Middle Column: Event Cards -->
            <div class="lg:col-span-4 space-y-8">
                <?php foreach ($events as $event): ?>
                    <div class="event-card group cursor-pointer">
                        <!-- Event Image -->
                        <div class="relative overflow-hidden rounded-xl mb-4 aspect-[4/3]">
                            <img 
                                src="<?= $event['image'] ?>" 
                                alt="<?= $event['title'] ?>" 
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                            >
                        </div>
                        
                        <!-- Event Info -->
                        <div class="flex items-start gap-3 mb-2">
                            <span class="text-sm text-gray-400"><?= $event['number'] ?></span>
                            <div class="flex-1">
                                <h4 class="text-base md:text-lg font-normal text-black mb-2 group-hover:text-gray-600 transition-colors duration-300">
                                    <?= $event['title'] ?>
                                </h4>
                                <p class="text-sm text-gray-500">
                                    <?= $event['date'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Right Column: Large Portrait Image -->
            <div class="lg:col-span-3">
                <div class="relative overflow-hidden rounded-2xl aspect-[3/4] shadow-xl">
                    <img 
                        src="assets/images/event-portrait.jpg" 
                        alt="Professional portrait" 
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>
            
        </div>

    </div>
</section>

<script>
// Add smooth hover animations to event cards
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        const eventCards = document.querySelectorAll('.event-card');
        
        eventCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    x: 5,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    x: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    }
});
</script>

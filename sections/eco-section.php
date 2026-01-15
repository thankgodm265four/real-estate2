<?php
/**
 * Eco-Friendly Features Section
 * Interactive section with image switching and glass overlay
 */

$ecoItems = [
    [
        'id' => 1,
        'title' => 'Eco-friendly construction',
        'description' => 'Building a better future with sustainable materials, energy-efficient designs, and environmentally conscious practices — without compromising on style or comfort.',
        'image' => 'assets/images/eco-1.jpg',
        'fact' => 'Ancient civilizations like the Greeks and Egyptians oriented their buildings to maximize natural light and ventilation!',
        'stat' => '70%',
        'statLabel' => 'Reduce a building\'s operational carbon footprint'
    ],
    [
        'id' => 2,
        'title' => 'Sustainable living designs',
        'description' => 'Crafting spaces that support a greener lifestyle — from smart layouts and natural lighting to energy-efficient solutions that reduce your footprint and enhance daily living.',
        'image' => 'assets/images/eco-2.jpg',
        'fact' => 'Sustainable homes can reduce water usage by up to 50% through greywater recycling and low-flow fixtures.',
        'stat' => '50%',
        'statLabel' => 'Water usage reduction potential'
    ],
    [
        'id' => 3,
        'title' => 'Green home solutions',
        'description' => 'Integrating eco-conscious technologies and materials to create homes that are energy-efficient, cost-effective, and kind to the environment — without sacrificing comfort or style.',
        'image' => 'assets/images/eco-3.jpg',
        'fact' => 'Solar panels can offset up to 100% of a home\'s electricity needs, significantly reducing reliance on fossil fuels.',
        'stat' => '100%',
        'statLabel' => 'Energy offset potential with solar'
    ],
    [
        'id' => 4,
        'title' => 'Eco-conscious architecture',
        'description' => 'Blending innovative design with environmental responsibility to create structures that harmonize with nature, minimize impact, and promote long-term sustainability.',
        'image' => 'assets/images/eco-4.jpg',
        'fact' => 'Green roofs can lower city temperatures by up to 5°C, mitigating the urban heat island effect.',
        'stat' => '5°C',
        'statLabel' => 'Temperature reduction from green roofs'
    ]
];
?>

<section class="w-full py-12 md:py-16 bg-[#F8F8F8]">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        
        <!-- Dark Container -->
        <div class="bg-[#1a1a1a] rounded-3xl overflow-hidden p-4 md:p-6">
            
            <!-- 2-Column Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                
                <!-- Left Column: Image & Glass Overlay -->
                <div class="relative h-[500px] lg:h-auto">
                    <!-- Image Container -->
                    <div id="eco-image-wrapper" class="relative h-full w-full rounded-t-2xl lg:rounded-l-2xl lg:rounded-tr-none overflow-hidden">
                        <?php foreach ($ecoItems as $index => $item): ?>
                            <img 
                                src="<?= $item['image'] ?>" 
                                alt="<?= $item['title'] ?>" 
                                class="eco-feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-700 <?= $index === 3 ? 'opacity-100' : 'opacity-0' ?>"
                                data-id="<?= $item['id'] ?>"
                            >
                        <?php endforeach; ?>
                        
                        <!-- Glass Overlay (Bottom) -->
                        <div class="absolute bottom-4 left-4 right-4 backdrop-blur-md bg-white/10 border border-white/20 rounded-xl p-6">
                            <p id="eco-fact" class="text-white text-sm leading-relaxed mb-4">
                                <?= $ecoItems[3]['fact'] ?>
                            </p>
                            <div>
                                <p id="eco-stat" class="text-4xl font-bold text-white mb-1">
                                    <?= $ecoItems[3]['stat'] ?>
                                </p>
                                <p id="eco-stat-label" class="text-white/80 text-xs">
                                    <?= $ecoItems[3]['statLabel'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Feature List -->
                <div class="bg-[#1a1a1a] p-8 md:p-10 space-y-6">
                    
                    <?php foreach ($ecoItems as $index => $item): ?>
                        <div 
                            class="eco-feature-item cursor-pointer transition-all duration-500 rounded-xl <?= $index === 3 ? 'active bg-white p-6 shadow-lg' : 'p-2' ?>"
                            data-id="<?= $item['id'] ?>"
                            data-fact="<?= htmlspecialchars($item['fact']) ?>"
                            data-stat="<?= $item['stat'] ?>"
                            data-stat-label="<?= htmlspecialchars($item['statLabel']) ?>"
                        >
                            <h3 class="text-2xl font-serif mb-2 transition-colors duration-300 <?= $index === 3 ? 'text-black' : 'text-white' ?>">
                                <?= $item['id'] ?>. <?= $item['title'] ?>
                            </h3>
                            <p class="text-sm leading-relaxed transition-all duration-500 <?= $index === 3 ? 'text-gray-600 max-h-40 opacity-100' : 'text-gray-400 max-h-0 opacity-0 overflow-hidden' ?>">
                                <?= $item['description'] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</section>

<script>
// Eco Features Interactive Functionality
document.addEventListener('DOMContentLoaded', () => {
    const featureItems = document.querySelectorAll('.eco-feature-item');
    const images = document.querySelectorAll('.eco-feature-image');
    const factElement = document.getElementById('eco-fact');
    const statElement = document.getElementById('eco-stat');
    const statLabelElement = document.getElementById('eco-stat-label');
    
    featureItems.forEach(item => {
        item.addEventListener('click', function() {
            const itemId = this.dataset.id;
            const fact = this.dataset.fact;
            const stat = this.dataset.stat;
            const statLabel = this.dataset.statLabel;
            
            // Remove active class from all items
            featureItems.forEach(fi => {
                fi.classList.remove('active', 'bg-white', 'p-6', 'shadow-lg');
                fi.classList.add('p-2');
                
                // Reset text colors
                const title = fi.querySelector('h3');
                const desc = fi.querySelector('p');
                title.classList.remove('text-black');
                title.classList.add('text-white');
                desc.classList.remove('text-gray-600', 'max-h-40', 'opacity-100');
                desc.classList.add('text-gray-400', 'max-h-0', 'opacity-0', 'overflow-hidden');
            });
            
            // Add active class to clicked item
            this.classList.add('active', 'bg-white', 'p-6', 'shadow-lg');
            this.classList.remove('p-2');
            
            // Update text colors for active item
            const activeTitle = this.querySelector('h3');
            const activeDesc = this.querySelector('p');
            activeTitle.classList.remove('text-white');
            activeTitle.classList.add('text-black');
            activeDesc.classList.remove('text-gray-400', 'max-h-0', 'opacity-0', 'overflow-hidden');
            activeDesc.classList.add('text-gray-600', 'max-h-40', 'opacity-100');
            
            // Switch images with smooth fade
            images.forEach(img => {
                if (img.dataset.id === itemId) {
                    img.classList.remove('opacity-0');
                    img.classList.add('opacity-100');
                } else {
                    img.classList.remove('opacity-100');
                    img.classList.add('opacity-0');
                }
            });
            
            // Update glass overlay content with fade effect
            if (typeof gsap !== 'undefined') {
                gsap.to([factElement, statElement, statLabelElement], {
                    opacity: 0,
                    duration: 0.3,
                    onComplete: () => {
                        factElement.textContent = fact;
                        statElement.textContent = stat;
                        statLabelElement.textContent = statLabel;
                        
                        gsap.to([factElement, statElement, statLabelElement], {
                            opacity: 1,
                            duration: 0.3
                        });
                    }
                });
            } else {
                factElement.textContent = fact;
                statElement.textContent = stat;
                statLabelElement.textContent = statLabel;
            }
        });
    });
});
</script>

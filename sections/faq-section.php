<?php
/**
 * FAQ Section (05)
 * Frequently Asked Questions with accordion functionality
 */

$faqs = [
    [
        'question' => 'Do you work with specific contractors or suppliers?',
        'answer' => 'Yes, we have established relationships with trusted contractors and suppliers. However, we are also flexible and can work with your preferred partners if you have specific preferences.'
    ],
    [
        'question' => 'Do you carry out remote projects?',
        'answer' => 'Absolutely! We have successfully completed numerous remote projects. Through virtual consultations, detailed plans, and regular communication, we ensure seamless project execution regardless of location.'
    ],
    [
        'question' => 'What is the payment process?',
        'answer' => 'Our payment process is structured in phases: an initial deposit to begin the design phase, milestone payments during construction, and a final payment upon project completion. We provide transparent invoicing throughout.'
    ],
    [
        'question' => 'Do I need to hire an architect for my project?',
        'answer' => 'It depends on your project scope. For structural changes or new construction, an architect is typically required. For interior design and renovations, our team can often handle the project independently.'
    ]
];
?>

<section class="w-full bg-[#F8F8F8] py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16">
        
        <!-- Main Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
            
            <!-- Left Column: Image + Section Number -->
            <div class="lg:col-span-4">
                <!-- Interior Image -->
                <div class="relative overflow-hidden rounded-2xl mb-8 aspect-[4/3] shadow-lg">
                    <img 
                        src="assets/images/faq-interior.jpg" 
                        alt="Interior design" 
                        class="w-full h-full object-cover"
                    >
                </div>
                
                <!-- Section Number -->
                <div class="flex items-baseline gap-2">
                    <h3 class="text-7xl md:text-8xl lg:text-9xl font-light text-black">05</h3>
                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-2">FAQs</p>
                </div>
            </div>
            
            <!-- Right Column: FAQ Content -->
            <div class="lg:col-span-8">
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-black leading-tight mb-12">
                    Answers to Your Frequently Asked Questions
                </h2>
                
                <!-- FAQ Accordion -->
                <div class="space-y-4">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="faq-item border-b border-gray-300 pb-4">
                            <button 
                                class="faq-question w-full flex items-center justify-between text-left py-4 group"
                                data-index="<?= $index ?>"
                            >
                                <span class="text-base md:text-lg font-normal text-black pr-8 group-hover:text-gray-600 transition-colors duration-300">
                                    <?= $faq['question'] ?>
                                </span>
                                <span class="faq-icon text-2xl text-black flex-shrink-0 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div class="faq-answer overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                <p class="text-sm md:text-base text-gray-600 leading-relaxed pb-4 pt-2">
                                    <?= $faq['answer'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>

    </div>
</section>

<script>
// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');
        
        question.addEventListener('click', () => {
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            
            // Close all other FAQs
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    otherAnswer.style.maxHeight = '0px';
                    otherIcon.textContent = '+';
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current FAQ
            if (isOpen) {
                answer.style.maxHeight = '0px';
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg)';
            } else {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.textContent = '−';
                icon.style.transform = 'rotate(90deg)';
            }
            
            // GSAP animation if available
            if (typeof gsap !== 'undefined') {
                if (!isOpen) {
                    gsap.from(answer, {
                        opacity: 0,
                        y: -10,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                }
            }
        });
    });
});
</script>

<?php
include 'includes/header.php';
?>

<!-- Hero Section - ONE Single Full Screen Section -->
<section class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/hero-bg.png');">
    
    <!-- Dark Brown/Black Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/20 to-black/50"></div>
    
    <!-- Content Container - Full Height Flex -->
    <div class="relative z-10 flex flex-col min-h-screen">
        
        <!-- ========== GLASSMORPHISM NAVIGATION BAR ========== -->
        <nav id="mainNav" class="fixed top-0 left-0 right-0 flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 z-50 transition-all duration-300">
            
            <!-- Logo (Left) - Responsive sizing -->
            <a href="index.php" class="flex items-center gap-2 relative z-50 group">
                <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 w-auto filter brightness-0 invert">
                <span class="text-xl font-bold text-white tracking-tight">Kindreal</span>
            </a>
            
            <!-- Glassmorphism Menu (Center - Desktop Only) -->
            <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
                <ul class="flex items-center gap-1 bg-white/20 backdrop-blur-md border border-white/20 rounded-full p-1.5">
                    <!-- Active: Home -->
                    <li>
                        <a href="#" class="bg-white text-black rounded-full px-6 py-2 font-medium text-sm transition-all duration-300 hover:bg-gray-100">
                            Home
                        </a>
                    </li>
                    <!-- Other Links -->
                    <li>
                        <a href="blog.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="about.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                            Why Kindreal
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="text-white px-5 py-2 rounded-full hover:bg-white/10 transition-all duration-300 font-medium text-sm">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Right Side: Buy Template Button (Desktop) + Hamburger (Mobile) -->
            <div class="flex items-center gap-3 md:gap-4 relative z-50">
                <!-- Phone Number (Hidden on mobile) -->
                <a href="tel:+2347032291977" class="hidden md:flex items-center gap-2 text-white/90 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="text-sm font-medium">+234 703 229 1977</span>
                </a>
                
                <!-- Hamburger Menu Button (Mobile Only) -->
                <button 
                    id="mobileMenuBtn" 
                    class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50"
                    aria-label="Toggle mobile menu"
                >
                    <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="hamburger-line w-6 h-0.5 bg-white transition-all duration-300"></span>
                </button>
            </div>
            
        </nav>
        
        <!-- Mobile Menu Overlay -->
        <div 
            id="mobileMenuOverlay" 
            class="fixed inset-0 bg-black/40 opacity-0 invisible transition-all duration-500 ease-in-out z-40 lg:hidden"
        ></div>
        
        <!-- Mobile Navigation Dropdown - From Top -->
        <div 
            id="mobileMenu" 
            class="fixed top-0 left-0 right-0 w-full bg-white rounded-b-3xl shadow-2xl transform -translate-y-full transition-transform duration-500 ease-in-out z-50 lg:hidden overflow-hidden max-h-[90vh]"
        >
            <!-- Drawer Content -->
            <div class="relative flex flex-col">
                
                <!-- Header: Logo + Close Button -->
                <div class="flex justify-between items-center p-6 md:p-8">
                    <div class="flex items-center gap-2">
                        <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 w-auto">
                        <span class="text-xl font-bold text-gray-900 tracking-tight">Kindreal</span>
                    </div>
                    <button 
                        id="closeMobileMenu" 
                        class="w-10 h-10 flex items-center justify-center text-gray-600 hover:text-gray-900 transition-colors duration-300"
                        aria-label="Close menu"
                    >
                        <!-- Close X Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Navigation List -->
                <nav class="flex flex-col gap-4 md:gap-6 px-6 md:px-8 py-4 pb-6">
                    <a href="index.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                        Home
                    </a>
                    <a href="blog.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                        Blog
                    </a>
                    <a href="about.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                        Why Kindreal
                    </a>
                    <a href="contact.php" class="text-lg md:text-xl font-normal text-gray-900 hover:translate-x-2 transition-transform duration-300">
                        Contact Us
                    </a>
                    
                </nav>
                
                <!-- Profile Card (Bottom) -->
                <div class="px-6 md:px-8 pb-6">
                    <div class="bg-black rounded-full shadow-xl hover:-translate-y-1 transition-all duration-300 p-2 pl-3">
                        <div class="flex items-center justify-between">
                            <!-- Avatar + Text -->
                            <div class="flex items-center gap-3">
                                <!-- Avatar with Green Dot -->
                                <div class="relative">
                                    <img 
                                        src="https://ui-avatars.com/api/?name=Kindreal+Properties&background=000&color=fff&size=48" 
                                        alt="Profile" 
                                        class="w-12 h-12 rounded-full object-cover"
                                    >
                                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-black"></div>
                                </div>
                                <!-- Name + Title -->
                                <div class="flex flex-col">
                                    <p class="text-white font-bold text-sm">Kindreal Properties</p>
                                    <p class="text-gray-400 text-xs">Nigeria's No.1</p>
                                </div>
                            </div>
                            <!-- CTA Button -->
                            <a 
                                href="#" 
                                class="bg-white text-black px-4 md:px-5 py-2 rounded-full font-medium text-sm hover:bg-gray-100 transition-all duration-300 hover:shadow-lg whitespace-nowrap"
                            >
                                Book a call
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

<style>
/* Sticky Navigation Styles */
#mainNav {
    background: transparent;
    box-shadow: none;
}

#mainNav.scrolled {
    background: rgba(10, 10, 10, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
    padding-top: 1rem;
    padding-bottom: 1rem;
}

@media (min-width: 768px) {
    #mainNav.scrolled {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
    }
}

/* Desktop Dropdown hover effect */
.pages-dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
}

.pages-dropdown:hover svg {
    transform: rotate(180deg);
}

/* Hamburger Menu Animation */
#mobileMenuBtn.active .hamburger-line:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

#mobileMenuBtn.active .hamburger-line:nth-child(2) {
    opacity: 0;
}

#mobileMenuBtn.active .hamburger-line:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
}

/* Smooth Mobile Menu Animations */
#mobileMenu {
    transition: transform 0.5s cubic-bezier(0.4, 0.0, 0.2, 1);
}

#mobileMenuOverlay {
    transition: opacity 0.5s cubic-bezier(0.4, 0.0, 0.2, 1),
                visibility 0.5s cubic-bezier(0.4, 0.0, 0.2, 1);
}

/* Staggered menu item animations */
#mobileMenu nav li {
    opacity: 0;
    transform: translateX(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

#mobileMenu.open nav li {
    opacity: 1;
    transform: translateX(0);
}

#mobileMenu.open nav li:nth-child(1) { transition-delay: 0.1s; }
#mobileMenu.open nav li:nth-child(2) { transition-delay: 0.15s; }
#mobileMenu.open nav li:nth-child(3) { transition-delay: 0.2s; }
#mobileMenu.open nav li:nth-child(4) { transition-delay: 0.25s; }
#mobileMenu.open nav li:nth-child(5) { transition-delay: 0.3s; }
#mobileMenu.open nav li:nth-child(6) { transition-delay: 0.35s; }
#mobileMenu.open nav li:nth-child(7) { transition-delay: 0.4s; }

/* Mobile Pages Dropdown */
.mobile-pages-dropdown.active .mobile-dropdown-content {
    max-height: 400px;
    padding-bottom: 0.5rem;
}

.mobile-pages-dropdown.active svg {
    transform: rotate(180deg);
}

/* Prevent body scroll when mobile menu is open */
body.mobile-menu-open {
    overflow: hidden;
}
</style>

<script>
// Sticky Navigation on Scroll
window.addEventListener('scroll', () => {
    const nav = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        nav?.classList.add('scrolled');
    } else {
        nav?.classList.remove('scrolled');
    }
});

// Mobile Menu & Dropdown functionality
document.addEventListener('DOMContentLoaded', () => {
    // Desktop dropdown
    const dropdown = document.querySelector('.pages-dropdown');
    const dropdownMenu = dropdown?.querySelector('.dropdown-menu');
    
    if (dropdown && dropdownMenu) {
        dropdown.addEventListener('mouseenter', () => {
            dropdownMenu.style.opacity = '1';
            dropdownMenu.style.visibility = 'visible';
        });
        
        dropdown.addEventListener('mouseleave', () => {
            dropdownMenu.style.opacity = '0';
            dropdownMenu.style.visibility = 'hidden';
        });
    }
    
    // Mobile Menu Elements
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    
    // Open Mobile Menu (Dropdown from top)
    function openMobileMenu() {
        mobileMenu.classList.remove('-translate-y-full');
        mobileMenuOverlay.classList.remove('opacity-0', 'invisible');
        mobileMenuOverlay.classList.add('opacity-100', 'visible');
        mobileMenuBtn.classList.add('active');
        document.body.classList.add('mobile-menu-open');
        
        // Add 'open' class for staggered menu animations
        setTimeout(() => {
            mobileMenu.classList.add('open');
        }, 50);
    }
    
    // Close Mobile Menu
    function closeMobileMenuFunc() {
        mobileMenu.classList.remove('open');
        mobileMenu.classList.add('-translate-y-full');
        mobileMenuOverlay.classList.add('opacity-0', 'invisible');
        mobileMenuOverlay.classList.remove('opacity-100', 'visible');
        mobileMenuBtn.classList.remove('active');
        document.body.classList.remove('mobile-menu-open');
    }
    
    // Event Listeners
    mobileMenuBtn?.addEventListener('click', openMobileMenu);
    closeMobileMenu?.addEventListener('click', closeMobileMenuFunc);
    mobileMenuOverlay?.addEventListener('click', closeMobileMenuFunc);
    
    // Mobile Pages Dropdown Toggle
    const mobileDropdown = document.querySelector('.mobile-pages-dropdown');
    const mobileDropdownBtn = mobileDropdown?.querySelector('button');
    
    mobileDropdownBtn?.addEventListener('click', () => {
        mobileDropdown.classList.toggle('active');
    });
    
    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu?.querySelectorAll('a');
    mobileLinks?.forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenuFunc();
        });
    });
    
    // Close mobile menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !mobileMenu?.classList.contains('-translate-y-full')) {
            closeMobileMenuFunc();
        }
    });
});
</script>

        <!-- ========== MAIN HERO CONTENT (Center) ========== -->
        <div class="flex-1 flex flex-col items-center justify-center px-6 text-center -mt-16">
            
            <!-- Main Heading - Large Bold White -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-semibold text-white leading-tight mb-6">
                Homes that<br>inspire greatness
            </h1>
            
            <!-- Subtitle - Smaller Light Gray -->
            <p class="text-sm md:text-base text-white/80 max-w-xl mb-8 leading-relaxed">
                Modern architecture, exclusive locations, and comfortable homes designed to inspire you and your family. Nigeria's No.1 real estate company.
            </p>
            
            <!-- Primary CTA Button - White Pill -->
            <a href="#" class="bg-white text-gray-900 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Book a Consultation
            </a>
        </div>

        <!-- ========== STATISTICS ROW (Bottom - Same Section) ========== -->
        <div class="px-8 md:px-16 lg:px-24 pb-12 md:pb-16">
            
            <!-- Stats Container -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-12 md:gap-24 lg:gap-32">
                
                <!-- Stat 1 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-1">250</div>
                    <p class="text-xs md:text-sm text-white/60 tracking-wide">Projects Complete</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-1">90</div>
                    <p class="text-xs md:text-sm text-white/60 tracking-wide">Satisfied Clients</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-1">150</div>
                    <p class="text-xs md:text-sm text-white/60 tracking-wide">Expert Team</p>
                </div>
            </div>
        </div>
        
    </div>
</section>


<!-- ========== ECO-FOCUSED SECTION ========== -->
<?php include 'sections/eco-section.php'; ?>

<!-- ========== SUCCESS METRICS SECTION ========== -->
<?php include 'sections/success-section.php'; ?>

<!-- ========== IMAGE SHOWCASE SECTION ========== -->
<?php include 'sections/image-showcase.php'; ?>

<!-- ========== PROJECTS SECTION ========== -->
<?php include 'sections/projects-section.php'; ?>

<!-- ========== EVENTS SECTION ========== -->
<?php include 'sections/events-section.php'; ?>

<!-- ========== FAQ SECTION ========== -->
<?php include 'sections/faq-section.php'; ?>

<!-- ========== SPLIT GLASS HERO SECTION ========== -->
<?php include 'sections/glass-hero-section.php'; ?>


<!-- ========== SMOOTH ANIMATIONS SCRIPT ========== -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);
    
    // Set default easing
    gsap.defaults({
        ease: "power3.out",
        duration: 1
    });

    // ========== HERO SECTION ANIMATIONS ==========
    
    // Animate navigation on load
    gsap.from('nav', {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: "power2.out"
    });
    
    // Animate hero heading with split reveal
    gsap.from('h1', {
        y: 50,
        opacity: 0,
        duration: 1.2,
        delay: 0.3,
        ease: "power3.out"
    });
    
    // Animate hero subtitle
    gsap.from('h1 + p', {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.5,
        ease: "power2.out"
    });
    
    // Animate CTA button with bounce
    gsap.from('h1 + p + a', {
        scale: 0.8,
        opacity: 0,
        duration: 0.8,
        delay: 0.7,
        ease: "back.out(1.5)"
    });
    
    // Animate stats with stagger and number counter
    const stats = document.querySelectorAll('.text-center');
    stats.forEach((stat, index) => {
        const numberEl = stat.querySelector('div');
        const targetNumber = parseInt(numberEl.textContent);
        
        gsap.from(stat, {
            y: 40,
            opacity: 0,
            duration: 0.8,
            delay: 0.9 + (index * 0.15),
            ease: "power2.out"
        });
        
        // Animate number counting up
        gsap.from(numberEl, {
            textContent: 0,
            duration: 2,
            delay: 1.2 + (index * 0.15),
            ease: "power1.out",
            snap: { textContent: 1 },
            onUpdate: function() {
                numberEl.textContent = Math.ceil(this.targets()[0].textContent);
            }
        });
    });

    // ========== PARALLAX EFFECTS ==========
    
    // Hero background parallax
    gsap.to('.bg-cover', {
        scrollTrigger: {
            trigger: 'section',
            start: 'top top',
            end: 'bottom top',
            scrub: 1
        },
        y: 200,
        ease: "none"
    });
    
    // Hero content fade on scroll
    gsap.to('.relative.z-10', {
        scrollTrigger: {
            trigger: 'section',
            start: 'top top',
            end: '50% top',
            scrub: 1
        },
        opacity: 0,
        y: -50,
        ease: "none"
    });

    // ========== SCROLL-TRIGGERED ANIMATIONS ==========
    
    // Fade in elements on scroll
    gsap.utils.toArray('.max-w-7xl').forEach((section, index) => {
        if (index > 0) { // Skip first section (already animated)
            gsap.from(section, {
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    end: 'top 50%',
                    toggleActions: 'play none none reverse'
                },
                y: 60,
                opacity: 0,
                duration: 1,
                ease: "power2.out"
            });
        }
    });
    
    // Animate headings on scroll
    gsap.utils.toArray('h2, h3').forEach(heading => {
        gsap.from(heading, {
            scrollTrigger: {
                trigger: heading,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            },
            x: -50,
            opacity: 0,
            duration: 0.8,
            ease: "power2.out"
        });
    });
    
    // Animate paragraphs on scroll
    gsap.utils.toArray('p').forEach(para => {
        if (para.closest('nav') || para.closest('.eco-item')) return; // Skip nav and eco items
        
        gsap.from(para, {
            scrollTrigger: {
                trigger: para,
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            },
            y: 20,
            opacity: 0,
            duration: 0.6,
            ease: "power2.out"
        });
    });

    // ========== SMOOTH NAVIGATION ==========
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 1.5,
                    scrollTo: target,
                    ease: "power3.inOut"
                });
            }
        });
    });
    
    // Navigation hover effects
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('mouseenter', () => {
            gsap.to(link, {
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        link.addEventListener('mouseleave', () => {
            gsap.to(link, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });
    
    // Button hover effects with scale and shadow
    document.querySelectorAll('a[class*="bg-white"]').forEach(button => {
        button.addEventListener('mouseenter', () => {
            gsap.to(button, {
                scale: 1.05,
                boxShadow: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                scale: 1,
                boxShadow: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });

    // ========== SCROLL PROGRESS INDICATOR ==========
    
    // Create progress bar
    const progressBar = document.createElement('div');
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        z-index: 9999;
        transition: width 0.1s ease-out;
    `;
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', () => {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        progressBar.style.width = scrolled + '%';
    });

    console.log('✨ Smooth animations loaded successfully!');
});
</script>

<?php
include 'includes/footer.php';
?>

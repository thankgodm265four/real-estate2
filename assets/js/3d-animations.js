/**
 * 3D Animation System for Real Estate Website
 * Provides parallax, tilt, scroll reveals, and depth effects
 */

class Animation3D {
    constructor() {
        this.init();
    }

    init() {
        this.setupParallax();
        this.setupTiltCards();
        this.setupScrollReveal();
        this.setupFloatingElements();
        this.setupDepthLayers();
    }

    /**
     * Parallax Scrolling Effect
     * Creates depth by moving elements at different speeds
     */
    setupParallax() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        
        if (parallaxElements.length === 0) return;

        let ticking = false;

        const updateParallax = () => {
            const scrolled = window.pageYOffset;

            parallaxElements.forEach(element => {
                const speed = parseFloat(element.dataset.parallax) || 0.5;
                const rect = element.getBoundingClientRect();
                const elementTop = rect.top + scrolled;
                const elementHeight = rect.height;
                const viewportHeight = window.innerHeight;

                // Only animate when element is in viewport
                if (scrolled + viewportHeight > elementTop && scrolled < elementTop + elementHeight) {
                    const yPos = (scrolled - elementTop) * speed;
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });

            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });

        // Initial call
        updateParallax();
    }

    /**
     * 3D Tilt Effect on Cards
     * Creates interactive perspective tilt on mouse movement
     */
    setupTiltCards() {
        const tiltCards = document.querySelectorAll('[data-tilt]');

        tiltCards.forEach(card => {
            const maxTilt = parseFloat(card.dataset.tiltMax) || 15;
            const perspective = parseFloat(card.dataset.tiltPerspective) || 1000;
            const scale = parseFloat(card.dataset.tiltScale) || 1.05;

            card.style.transformStyle = 'preserve-3d';
            card.style.transition = 'transform 0.1s ease-out';

            card.addEventListener('mouseenter', () => {
                card.style.transition = 'transform 0.1s ease-out';
            });

            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = ((y - centerY) / centerY) * maxTilt;
                const rotateY = ((centerX - x) / centerX) * maxTilt;

                card.style.transform = `
                    perspective(${perspective}px)
                    rotateX(${rotateX}deg)
                    rotateY(${rotateY}deg)
                    scale3d(${scale}, ${scale}, ${scale})
                `;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transition = 'transform 0.5s ease-out';
                card.style.transform = `
                    perspective(${perspective}px)
                    rotateX(0deg)
                    rotateY(0deg)
                    scale3d(1, 1, 1)
                `;
            });
        });
    }

    /**
     * Scroll-Triggered 3D Reveal Animations
     * Elements animate into view with 3D transforms
     */
    setupScrollReveal() {
        const revealElements = document.querySelectorAll('[data-reveal]');

        if (revealElements.length === 0) return;

        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const animation = element.dataset.reveal || 'fade-up';
                    const delay = parseFloat(element.dataset.revealDelay) || 0;

                    setTimeout(() => {
                        element.classList.add('revealed');
                        this.applyRevealAnimation(element, animation);
                    }, delay);

                    observer.unobserve(element);
                }
            });
        }, observerOptions);

        revealElements.forEach(element => {
            // Set initial state
            element.style.opacity = '0';
            this.setInitialRevealState(element, element.dataset.reveal || 'fade-up');
            observer.observe(element);
        });
    }

    setInitialRevealState(element, animation) {
        element.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

        switch (animation) {
            case 'fade-up':
                element.style.transform = 'translate3d(0, 60px, 0)';
                break;
            case 'fade-down':
                element.style.transform = 'translate3d(0, -60px, 0)';
                break;
            case 'fade-left':
                element.style.transform = 'translate3d(60px, 0, 0)';
                break;
            case 'fade-right':
                element.style.transform = 'translate3d(-60px, 0, 0)';
                break;
            case 'zoom-in':
                element.style.transform = 'scale3d(0.8, 0.8, 0.8)';
                break;
            case 'flip-up':
                element.style.transformOrigin = 'center bottom';
                element.style.transform = 'perspective(1000px) rotateX(-90deg)';
                break;
            case 'flip-left':
                element.style.transformOrigin = 'center left';
                element.style.transform = 'perspective(1000px) rotateY(90deg)';
                break;
            case 'rotate-in':
                element.style.transform = 'rotate3d(0, 0, 1, -45deg) scale3d(0.8, 0.8, 0.8)';
                break;
        }
    }

    applyRevealAnimation(element, animation) {
        element.style.opacity = '1';
        element.style.transform = 'translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)';
    }

    /**
     * Floating Animation
     * Subtle levitation effect for elements
     */
    setupFloatingElements() {
        const floatingElements = document.querySelectorAll('[data-float]');

        floatingElements.forEach((element, index) => {
            const distance = parseFloat(element.dataset.floatDistance) || 10;
            const duration = parseFloat(element.dataset.floatDuration) || 3;
            const delay = parseFloat(element.dataset.floatDelay) || (index * 0.2);

            element.style.animation = `float-${index} ${duration}s ease-in-out ${delay}s infinite`;

            // Create unique keyframes for each element
            const keyframes = `
                @keyframes float-${index} {
                    0%, 100% { transform: translate3d(0, 0, 0); }
                    50% { transform: translate3d(0, -${distance}px, 0); }
                }
            `;

            // Inject keyframes
            if (!document.getElementById(`float-keyframes-${index}`)) {
                const style = document.createElement('style');
                style.id = `float-keyframes-${index}`;
                style.textContent = keyframes;
                document.head.appendChild(style);
            }
        });
    }

    /**
     * Depth Layering
     * Creates visual hierarchy with z-axis transforms
     */
    setupDepthLayers() {
        const depthElements = document.querySelectorAll('[data-depth]');

        depthElements.forEach(element => {
            const depth = parseFloat(element.dataset.depth) || 0;
            element.style.transform = `translateZ(${depth}px)`;
            element.style.transformStyle = 'preserve-3d';
        });
    }

    /**
     * 3D Card Flip Effect
     * Flips cards to reveal back content
     */
    static setupCardFlip(cardSelector) {
        const cards = document.querySelectorAll(cardSelector);

        cards.forEach(card => {
            card.style.transformStyle = 'preserve-3d';
            card.style.transition = 'transform 0.6s';

            card.addEventListener('click', () => {
                const currentRotation = card.style.transform.includes('rotateY(180deg)');
                card.style.transform = currentRotation 
                    ? 'rotateY(0deg)' 
                    : 'rotateY(180deg)';
            });
        });
    }

    /**
     * Perspective Scroll Effect
     * Changes perspective based on scroll position
     */
    static setupPerspectiveScroll(containerSelector) {
        const container = document.querySelector(containerSelector);
        if (!container) return;

        let ticking = false;

        const updatePerspective = () => {
            const scrolled = window.pageYOffset;
            const rect = container.getBoundingClientRect();
            const containerTop = rect.top + scrolled;
            const containerHeight = rect.height;
            
            const scrollProgress = (scrolled - containerTop) / containerHeight;
            const perspective = 1000 + (scrollProgress * 500);

            if (scrollProgress >= 0 && scrollProgress <= 1) {
                container.style.perspective = `${perspective}px`;
            }

            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updatePerspective);
                ticking = true;
            }
        });
    }

    /**
     * Mouse-Following 3D Effect
     * Elements follow mouse movement with depth
     */
    static setupMouseFollow(elementSelector, intensity = 0.1) {
        const elements = document.querySelectorAll(elementSelector);
        
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;

            elements.forEach(element => {
                const depth = parseFloat(element.dataset.followDepth) || 1;
                const x = mouseX * intensity * depth * 100;
                const y = mouseY * intensity * depth * 100;

                element.style.transform = `translate3d(${x}px, ${y}px, 0)`;
            });
        });
    }
}

// Initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        new Animation3D();
    });
} else {
    new Animation3D();
}

// Export for use in other scripts
window.Animation3D = Animation3D;

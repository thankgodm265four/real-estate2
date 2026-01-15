<?php
include 'includes/header.php';
?>

<!-- Contact Page - Premium Redesign -->
<section class="relative w-full min-h-screen bg-[#f8f7f2] overflow-hidden">
    
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-white hidden lg:block"></div>
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-gray-200/50 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-gray-100 rounded-full blur-3xl"></div>

    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 relative z-50 group">
            <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 w-auto">
            <span class="text-xl font-bold text-gray-900 tracking-tight">Kindreal</span>
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-white/80 backdrop-blur-md border border-gray-200 rounded-full p-1.5 shadow-sm">
                <li><a href="index.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-gray-50 transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="blog.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-gray-50 transition-all duration-300 font-medium text-sm">Blog</a></li>
                <li><a href="about.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-gray-50 transition-all duration-300 font-medium text-sm">Why Kindreal</a></li>
                <li><a href="contact.php" class="bg-gray-900 text-white rounded-full px-6 py-2 font-medium text-sm transition-all duration-300">Contact Us</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="tel:+2347032291977" class="hidden md:flex items-center gap-2 text-gray-700 hover:text-gray-900 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-sm font-medium">+234 703 229 1977</span>
            </a>
            <button id="mobileMenuBtn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50">
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
            </button>
        </div>
    </nav>
    
    <!-- Main Content Container -->
    <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-24 py-12 md:py-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left Side: Image & Info -->
            <div class="space-y-12" data-reveal="fade-right">
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight text-gray-900">
                        Let's build your <span class="font-semibold italic">dream home</span> together.
                    </h1>
                    <p class="text-lg text-gray-600 max-w-lg leading-relaxed">
                        Nigeria's No.1 real estate company. We offer homes that inspire greatness. Reach out to us for expert guidance and premium property solutions.
                    </p>
                </div>

                <!-- Image Showcase with 3D Tilt -->
                <div class="relative rounded-3xl overflow-hidden shadow-2xl group" data-tilt data-tilt-max="5">
                    <img src="https://kindreal-properties.com/images/banner/banner.png" alt="Kindreal Properties Showcase" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-sm uppercase tracking-widest mb-1 opacity-80">Kindreal Nigeria</p>
                        <h3 class="text-2xl font-light">Inspiring Greatness</h3>
                    </div>
                </div>

                <!-- Contact Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8">
                    <div class="space-y-2">
                        <h4 class="text-xs uppercase tracking-widest text-gray-400 font-bold">Visit Us</h4>
                        <p class="text-gray-900 font-medium">Plot 604, Along Katampe Road,<br>Abuja, Nigeria.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-xs uppercase tracking-widest text-gray-400 font-bold">Contact</h4>
                        <p class="text-gray-900 font-medium">+234 703 229 1977<br>hi@kindreal-properties.com</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Glassmorphism Form -->
            <div class="relative" data-reveal="fade-left" data-reveal-delay="200">
                <!-- Decorative Circle -->
                <div class="absolute -top-12 -right-12 w-24 h-24 bg-gray-900 rounded-full flex items-center justify-center text-white text-xs font-bold uppercase tracking-widest transform rotate-12 hidden lg:flex">
                    Contact
                </div>

                <div class="bg-white/40 backdrop-blur-xl border border-white/60 rounded-[40px] p-8 md:p-12 shadow-2xl relative z-10">
                    <form class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-xs uppercase tracking-widest text-gray-500 font-bold ml-1">Name</label>
                                <input type="text" placeholder="Your Name" class="w-full bg-white/50 border-b border-gray-200 py-4 px-1 focus:outline-none focus:border-gray-900 transition-colors bg-transparent">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs uppercase tracking-widest text-gray-500 font-bold ml-1">Email</label>
                                <input type="email" placeholder="Your Email" class="w-full bg-white/50 border-b border-gray-200 py-4 px-1 focus:outline-none focus:border-gray-900 transition-colors bg-transparent">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-widest text-gray-500 font-bold ml-1">Subject</label>
                            <select class="w-full bg-white/50 border-b border-gray-200 py-4 px-1 focus:outline-none focus:border-gray-900 transition-colors bg-transparent appearance-none cursor-pointer">
                                <option>Buy A New Home</option>
                                <option>Rent a Home</option>
                                <option>Sell a Home</option>
                                <option>Property Management</option>
                                <option>Real Estate Investment</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-widest text-gray-500 font-bold ml-1">Message</label>
                            <textarea rows="4" placeholder="Tell us about your dream project..." class="w-full bg-white/50 border-b border-gray-200 py-4 px-1 focus:outline-none focus:border-gray-900 transition-colors bg-transparent resize-none"></textarea>
                        </div>

                        <button type="submit" class="group relative w-full bg-gray-900 text-white py-6 rounded-2xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-[1.02]">
                            <span class="relative z-10 font-bold uppercase tracking-widest text-sm">Send Message</span>
                            <div class="absolute inset-0 bg-white transform translate-y-full transition-transform duration-500 group-hover:translate-y-0"></div>
                            <span class="absolute inset-0 flex items-center justify-center text-gray-900 font-bold uppercase tracking-widest text-sm opacity-0 transition-opacity duration-500 group-hover:opacity-100 z-20">Send Message</span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Map Section - Minimalist -->
<section class="w-full h-[500px] bg-gray-100 relative grayscale hover:grayscale-0 transition-all duration-1000">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.816644444444!2d7.48!3d9.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b!2sKatampe%20Road%2C%20Abuja!5e0!3m2!1sen!2sng!4v1625000000000!5m2!1sen!2sng" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"
    ></iframe>
</section>

<?php
include 'includes/footer.php';
?>

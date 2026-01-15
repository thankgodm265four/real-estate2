<?php
include 'includes/header.php';
?>

<!-- Contact Page -->
<section class="relative w-full min-h-screen bg-white">
    
    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight hover:opacity-90 transition relative z-50">
            EverGreen
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-gray-100/80 backdrop-blur-md border border-gray-200 rounded-full p-1.5">
                <li><a href="index.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="about.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">About</a></li>
                <li><a href="projects.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Projects</a></li>
                <li><a href="services.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Services</a></li>
            </ul>
        </div>
        
        <!-- Right Side -->
        <div class="flex items-center gap-3 md:gap-4 relative z-50">
            <a href="buy-template.php" class="hidden md:inline-block bg-gray-900 text-white px-4 md:px-5 py-2 rounded-md text-sm font-medium hover:bg-gray-800 transition">Buy template</a>
            <button id="mobileMenuBtn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none relative z-50">
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
                <span class="hamburger-line w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
            </button>
        </div>
    </nav>
    
    <!-- Hero Content -->
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20">
        <div class="text-center space-y-8 mb-16" data-reveal="fade-up">
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light leading-tight text-gray-900">
                Get in Touch
            </h1>
            
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Ready to start your next project? We'd love to hear from you. Fill out the form below and we'll get back to you within 24 hours.
            </p>
            
        </div>
        
        <!-- Contact Form and Info Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12" data-reveal="fade-right">
                <form class="space-y-6">
                    
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-900 mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 transition">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 transition">
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-900 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 transition">
                    </div>
                    
                    <!-- Service -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-900 mb-2">Service Interested In</label>
                        <select id="service" name="service" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 transition">
                            <option value="">Select a service</option>
                            <option value="interior">Interior Design</option>
                            <option value="architecture">Architecture</option>
                            <option value="project-management">Project Management</option>
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="renovation">Renovation</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-900 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 transition resize-none"></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-gray-900 text-white px-8 py-4 rounded-lg text-sm font-medium hover:bg-gray-800 transition-all duration-300 hover:scale-[1.02] shadow-lg">
                        Send Message
                    </button>
                    
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-8" data-reveal="fade-left">
                
                <!-- Office -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-black rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Office Location</h3>
                    <p class="text-gray-600">123 Design Avenue<br>Creative District<br>New York, NY 10001</p>
                </div>
                
                <!-- Email -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-black rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600">hello@evergreen.com<br>support@evergreen.com</p>
                </div>
                
                <!-- Phone -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-black rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600">+1 (555) 123-4567<br>Mon - Fri, 9am - 6pm EST</p>
                </div>
                
            </div>
            
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

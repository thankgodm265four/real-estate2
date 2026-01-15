<?php
include 'includes/header.php';
?>

<!-- Privacy Policy Page -->
<section class="relative w-full min-h-screen bg-white">
    
    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-4 md:px-8 lg:px-24 py-4 md:py-6 relative z-50">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 relative z-50 group">
            <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal Properties" class="h-8 md:h-10 w-auto">
            <span class="text-xl font-bold text-gray-900 tracking-tight">Kindreal</span>
        </a>
        
        <!-- Desktop Menu -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex items-center gap-1 bg-gray-100/80 backdrop-blur-md border border-gray-200 rounded-full p-1.5">
                <li><a href="index.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Home</a></li>
                <li><a href="blog.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Blog</a></li>
                <li><a href="about.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Why Kindreal</a></li>
                <li><a href="contact.php" class="text-gray-700 px-5 py-2 rounded-full hover:bg-white transition-all duration-300 font-medium text-sm">Contact Us</a></li>
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
    
    <!-- Content -->
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-12 md:py-20">
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-8" data-reveal="fade-up">
            Privacy Policy
        </h1>
        
        <div class="prose prose-lg max-w-none text-gray-600 space-y-8">
            
            <p class="text-sm text-gray-500">Last updated: January 2024</p>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Introduction</h2>
                <p>Welcome to Kindreal. We respect your privacy and are committed to protecting your personal data. This privacy policy will inform you about how we look after your personal data when you visit our website and tell you about your privacy rights.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Information We Collect</h2>
                <p>We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Identity Data includes first name, last name, username or similar identifier</li>
                    <li>Contact Data includes email address, telephone numbers, and postal address</li>
                    <li>Technical Data includes internet protocol (IP) address, browser type and version, and other technology on the devices you use to access this website</li>
                    <li>Usage Data includes information about how you use our website, products and services</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">3. How We Use Your Information</h2>
                <p>We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>To provide and maintain our services</li>
                    <li>To notify you about changes to our services</li>
                    <li>To provide customer support</li>
                    <li>To gather analysis or valuable information to improve our services</li>
                    <li>To monitor the usage of our services</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Data Security</h2>
                <p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorized way, altered or disclosed. We have also put in place procedures to deal with any suspected personal data breach.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Your Rights</h2>
                <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Request access to your personal data</li>
                    <li>Request correction of your personal data</li>
                    <li>Request erasure of your personal data</li>
                    <li>Object to processing of your personal data</li>
                    <li>Request restriction of processing your personal data</li>
                    <li>Request transfer of your personal data</li>
                    <li>Right to withdraw consent</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Contact Us</h2>
                <p>If you have any questions about this privacy policy or our privacy practices, please contact us at:</p>
                <p class="mt-4">
                    Email: privacy@kindreal-properties.com<br>
                    Address: Plot 604, Along Katampe Road, Abuja, Nigeria.
                </p>
            </section>
            
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

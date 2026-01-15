<?php
include 'includes/header.php';
?>

<!-- Privacy Policy Page -->
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
    
    <!-- Content -->
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-12 md:py-20">
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-8" data-reveal="fade-up">
            Privacy Policy
        </h1>
        
        <div class="prose prose-lg max-w-none text-gray-600 space-y-8">
            
            <p class="text-sm text-gray-500">Last updated: January 2024</p>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Introduction</h2>
                <p>Welcome to EverGreen. We respect your privacy and are committed to protecting your personal data. This privacy policy will inform you about how we look after your personal data when you visit our website and tell you about your privacy rights.</p>
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
                    Email: privacy@evergreen.com<br>
                    Address: 123 Design Avenue, Creative District, New York, NY 10001
                </p>
            </section>
            
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

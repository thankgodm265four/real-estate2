<?php
include 'includes/header.php';
?>

<!-- Terms of Service Page -->
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
            Terms of Service
        </h1>
        
        <div class="prose prose-lg max-w-none text-gray-600 space-y-8">
            
            <p class="text-sm text-gray-500">Last updated: January 2024</p>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Agreement to Terms</h2>
                <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Use License</h2>
                <p>Permission is granted to temporarily download one copy of the materials on EverGreen's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Modify or copy the materials</li>
                    <li>Use the materials for any commercial purpose or for any public display</li>
                    <li>Attempt to reverse engineer any software contained on EverGreen's website</li>
                    <li>Remove any copyright or other proprietary notations from the materials</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Services</h2>
                <p>EverGreen provides interior design, architecture, and project management services. All services are subject to availability and may be modified or discontinued at any time without notice.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">4. User Responsibilities</h2>
                <p>You are responsible for:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Maintaining the confidentiality of your account information</li>
                    <li>All activities that occur under your account</li>
                    <li>Ensuring that all information provided is accurate and up to date</li>
                    <li>Compliance with all applicable laws and regulations</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Limitation of Liability</h2>
                <p>In no event shall EverGreen or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on EverGreen's website.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Intellectual Property</h2>
                <p>All content, designs, graphics, and materials on this website are the property of EverGreen and are protected by copyright, trademark, and other intellectual property laws.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Modifications</h2>
                <p>EverGreen may revise these terms of service at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Contact Information</h2>
                <p>If you have any questions about these Terms of Service, please contact us at:</p>
                <p class="mt-4">
                    Email: legal@evergreen.com<br>
                    Address: 123 Design Avenue, Creative District, New York, NY 10001
                </p>
            </section>
            
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

<?php
include 'includes/header.php';
?>

<!-- Cookie Policy Page -->
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
            Cookie Policy
        </h1>
        
        <div class="prose prose-lg max-w-none text-gray-600 space-y-8">
            
            <p class="text-sm text-gray-500">Last updated: January 2024</p>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. What Are Cookies</h2>
                <p>Cookies are small pieces of text sent by your web browser by a website you visit. A cookie file is stored in your web browser and allows the website or a third-party to recognize you and make your next visit easier and the website more useful to you.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">2. How We Use Cookies</h2>
                <p>When you use and access our website, we may place a number of cookie files in your web browser. We use cookies for the following purposes:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>To enable certain functions of the website</li>
                    <li>To provide analytics</li>
                    <li>To store your preferences</li>
                    <li>To enable advertising delivery, including behavioral advertising</li>
                </ul>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Types of Cookies We Use</h2>
                
                <div class="space-y-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Essential Cookies</h3>
                        <p>These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Analytics Cookies</h3>
                        <p>These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Functional Cookies</h3>
                        <p>These cookies enable the website to provide enhanced functionality and personalization. They may be set by us or by third party providers whose services we have added to our pages.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Targeting Cookies</h3>
                        <p>These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites.</p>
                    </div>
                </div>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Managing Cookies</h2>
                <p>You can set or amend your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted.</p>
                <p class="mt-4">Most web browsers allow some control of most cookies through the browser settings. To find out more about cookies, including how to see what cookies have been set, visit <a href="https://www.aboutcookies.org" class="text-black underline" target="_blank">www.aboutcookies.org</a> or <a href="https://www.allaboutcookies.org" class="text-black underline" target="_blank">www.allaboutcookies.org</a>.</p>
            </section>
            
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Contact Us</h2>
                <p>If you have any questions about our use of cookies, please contact us at:</p>
                <p class="mt-4">
                    Email: privacy@evergreen.com<br>
                    Address:123 Design Avenue, Creative District, New York, NY 10001
                </p>
            </section>
            
        </div>
    </div>
    
</section>

<?php
include 'includes/footer.php';
?>

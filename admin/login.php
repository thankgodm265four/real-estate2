<?php
/**
 * Admin Login Page
 * Simple authentication for admin access
 */

session_start();

require_once __DIR__ . '/../config/supabase.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true) {
    header('Location: /admin/index.php');
    exit();
}

$error = '';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Simple hardcoded check for now (will be replaced with Supabase Auth)
    // Default credentials: admin@kindreal.com / admin123
    if ($email === 'admin@kindreal.com' && $password === 'admin123') {
        $_SESSION['admin_authenticated'] = true;
        $_SESSION['admin_user'] = [
            'email' => $email,
            'name' => 'Admin'
        ];
        header('Location: /admin/index.php');
        exit();
    } else {
        $error = 'Invalid email or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kindreal Properties</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Supabase JS Client -->
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    
    <!-- Custom Supabase Client -->
    <script src="/assets/js/supabase-client.js"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-md">
        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <!-- Logo -->
            <div class="text-center mb-8">
                <img src="<?php echo getSiteSetting('logo_url', 'https://kindreal-properties.com/images/logo.svg'); ?>" alt="Kindreal" class="h-12 mx-auto mb-4">
                <h1 class="text-2xl font-bold text-gray-900">Admin Login</h1>
                <p class="text-gray-500 mt-2">Sign in to manage your blog</p>
            </div>
            
            <!-- Error Message -->
            <?php if ($error): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>
            
            <!-- Login Form -->
            <form method="POST" action="" id="loginForm">
                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="admin@kindreal.com"
                    >
                </div>
                
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="••••••••"
                    >
                </div>
                
                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700">Forgot password?</a>
                </div>
                
                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-transform"
                >
                    Sign In
                </button>
            </form>
            
            <!-- Default Credentials Note (Remove in production) -->
            <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <p class="text-xs text-yellow-800">
                    <strong>Default Credentials:</strong><br>
                    Email: admin@kindreal.com<br>
                    Password: admin123
                </p>
            </div>
        </div>
        
        <!-- Back to Site -->
        <div class="text-center mt-6">
            <a href="/" class="text-sm text-gray-600 hover:text-gray-900">
                ← Back to Website
            </a>
        </div>
    </div>
    
    <!-- Supabase Auth Integration (for future use) -->
    <script>
        // Initialize Supabase
        const supabaseUrl = '<?php echo getSupabaseConfig()['url']; ?>';
        const supabaseKey = '<?php echo getSupabaseConfig()['anon_key']; ?>';
        initSupabase(supabaseUrl, supabaseKey);
        
        // Optional: Integrate Supabase Auth when ready
        /*
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            const { data, error } = await signIn(email, password);
            
            if (error) {
                alert('Login failed: ' + error.message);
            } else {
                // Store session and redirect
                window.location.href = '/admin/index.php';
            }
        });
        */
    </script>
</body>
</html>

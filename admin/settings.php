<?php
/**
 * Settings Page
 * Manage site settings: Logo, WhatsApp, Supabase config
 */

require_once __DIR__ . '/includes/header.php';
requireAuth();

$success = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $settings = [
        'supabase' => [
            'url' => $_POST['supabase_url'] ?? '',
            'anon_key' => $_POST['supabase_key'] ?? '',
            'storage_bucket' => $_POST['storage_bucket'] ?? 'blog-images'
        ],
        'site' => [
            'logo_url' => $_POST['logo_url'] ?? '',
            'whatsapp_number' => $_POST['whatsapp_number'] ?? '',
            'site_name' => $_POST['site_name'] ?? 'Kindreal Properties'
        ]
    ];
    
    if (saveSiteSettings($settings)) {
        $success = 'Settings saved successfully!';
    } else {
        $error = 'Failed to save settings. Please check file permissions.';
    }
}

// Load current settings
$currentSettings = [];
$settingsFile = __DIR__ . '/../config/settings.json';
if (file_exists($settingsFile)) {
    $currentSettings = json_decode(file_get_contents($settingsFile), true);
}
?>

<script>
    document.getElementById('page-title').textContent = 'Settings';
    document.getElementById('page-subtitle').textContent = 'Manage your site configuration';
</script>

<?php if ($success): ?>
<div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
    <?php echo htmlspecialchars($success); ?>
</div>
<?php endif; ?>

<?php if ($error): ?>
<div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
    <?php echo htmlspecialchars($error); ?>
</div>
<?php endif; ?>

<form method="POST" action="" enctype="multipart/form-data" id="settingsForm">
    
    <!-- Site Settings -->
    <div class="admin-card mb-6">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Site Settings</h3>
        
        <div class="space-y-6">
            <!-- Site Name -->
            <div>
                <label class="form-label">Site Name</label>
                <input 
                    type="text" 
                    name="site_name" 
                    class="form-input"
                    value="<?php echo htmlspecialchars($currentSettings['site']['site_name'] ?? 'Kindreal Properties'); ?>"
                    placeholder="Kindreal Properties"
                >
            </div>
            
            <!-- Logo URL -->
            <div>
                <label class="form-label">Logo URL</label>
                <input 
                    type="url" 
                    name="logo_url" 
                    class="form-input"
                    value="<?php echo htmlspecialchars($currentSettings['site']['logo_url'] ?? ''); ?>"
                    placeholder="https://kindreal-properties.com/images/logo.svg"
                >
                <p class="text-sm text-gray-500 mt-2">Enter the URL of your logo image. For local upload, use Supabase Storage.</p>
                
                <!-- Logo Preview -->
                <?php if (!empty($currentSettings['site']['logo_url'])): ?>
                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <p class="text-sm text-gray-600 mb-2">Current Logo:</p>
                    <img src="<?php echo htmlspecialchars($currentSettings['site']['logo_url']); ?>" alt="Logo" class="h-12">
                </div>
                <?php endif; ?>
            </div>
            
            <!-- WhatsApp Number -->
            <div>
                <label class="form-label">WhatsApp Number</label>
                <input 
                    type="tel" 
                    name="whatsapp_number" 
                    class="form-input"
                    value="<?php echo htmlspecialchars($currentSettings['site']['whatsapp_number'] ?? ''); ?>"
                    placeholder="+2347032291977"
                >
                <p class="text-sm text-gray-500 mt-2">Include country code. Example: +2347032291977</p>
            </div>
        </div>
    </div>
    
    <!-- Supabase Configuration -->
    <div class="admin-card mb-6">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Supabase Configuration</h3>
        
        <div class="space-y-6">
            <!-- Supabase URL -->
            <div>
                <label class="form-label">Supabase URL</label>
                <input 
                    type="url" 
                    name="supabase_url" 
                    class="form-input"
                    value="<?php echo htmlspecialchars($currentSettings['supabase']['url'] ?? ''); ?>"
                    placeholder="https://your-project.supabase.co"
                >
            </div>
            
            <!-- Supabase Anon Key -->
            <div>
                <label class="form-label">Supabase Anon Key</label>
                <textarea 
                    name="supabase_key" 
                    class="form-input"
                    rows="3"
                    placeholder="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9..."
                ><?php echo htmlspecialchars($currentSettings['supabase']['anon_key'] ?? ''); ?></textarea>
                <p class="text-sm text-gray-500 mt-2">Find this in your Supabase project settings under API.</p>
            </div>
            
            <!-- Storage Bucket -->
            <div>
                <label class="form-label">Storage Bucket Name</label>
                <input 
                    type="text" 
                    name="storage_bucket" 
                    class="form-input"
                    value="<?php echo htmlspecialchars($currentSettings['supabase']['storage_bucket'] ?? 'blog-images'); ?>"
                    placeholder="blog-images"
                >
                <p class="text-sm text-gray-500 mt-2">The name of your Supabase Storage bucket for images.</p>
            </div>
            
            <!-- Help Text -->
            <div class="p-4 bg-blue-50 border border-blue-200 rounded-lg">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="text-sm text-blue-700">
                        <p class="font-medium mb-1">Don't have Supabase set up yet?</p>
                        <ol class="list-decimal list-inside space-y-1">
                            <li>Go to <a href="https://supabase.com" target="_blank" class="underline">supabase.com</a> and create a free account</li>
                            <li>Create a new project</li>
                            <li>Go to Settings → API to get your URL and keys</li>
                            <li>Create a storage bucket called "blog-images"</li>
                            <li>Set up the database tables (see implementation plan)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Save Button -->
    <div class="flex items-center gap-4">
        <button type="submit" class="btn-primary">
            Save Settings
        </button>
        <button type="button" onclick="window.location.reload()" class="btn-secondary">
            Cancel
        </button>
    </div>
    
</form>

<!-- Logo Upload via Supabase (Future Feature) -->
<div class="admin-card mt-6">
    <h3 class="text-xl font-bold text-gray-900 mb-4">Upload New Logo</h3>
    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
        <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
        </svg>
        <input type="file" id="logoUpload" accept="image/*" class="hidden">
        <button type="button" onclick="document.getElementById('logoUpload').click()" class="btn-primary">
            Choose File
        </button>
        <p class="text-sm text-gray-500 mt-2">Or drag and drop your logo here</p>
        <p class="text-xs text-gray-400 mt-1">PNG, JPG, SVG up to 2MB</p>
    </div>
</div>

<script>
    // Handle logo upload to Supabase
    document.getElementById('logoUpload').addEventListener('change', async (e) => {
        const file = e.target.files[0];
        if (!file) return;
        
        const sb = getSupabase();
        if (!sb) {
            alert('Please configure Supabase first!');
            return;
        }
        
        try {
            // Show loading
            alert('Uploading logo...');
            
            // Upload to Supabase Storage
            const { data, error } = await uploadFile('site-assets', file);
            
            if (error) throw error;
            
            // Update logo URL field
            document.querySelector('input[name="logo_url"]').value = data.url;
            
            alert('Logo uploaded successfully! Click "Save Settings" to apply.');
        } catch (error) {
            alert('Upload failed: ' + error.message);
        }
    });
    
    // Test Supabase connection
    async function testSupabaseConnection() {
        const url = document.querySelector('input[name="supabase_url"]').value;
        const key = document.querySelector('textarea[name="supabase_key"]').value;
        
        if (!url || !key) {
            alert('Please enter Supabase URL and key first.');
            return;
        }
        
        try {
            const testClient = window.supabase.createClient(url, key);
            const { data, error } = await testClient.from('blog_posts').select('count', { count: 'exact', head: true });
            
            if (error) throw error;
            
            alert('✅ Connection successful!');
        } catch (error) {
            alert('❌ Connection failed: ' + error.message);
        }
    }
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

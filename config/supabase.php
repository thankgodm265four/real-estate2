<?php
/**
 * Supabase Configuration
 * Store public Supabase credentials here
 * Sensitive keys should never be hardcoded - they'll come from settings table
 */

// Default placeholder values
// Admin can update these via Settings page
$supabaseConfig = [
    'url' => getenv('SUPABASE_URL') ?: 'https://your-project.supabase.co',
    'anon_key' => getenv('SUPABASE_ANON_KEY') ?: 'your-anon-key-here',
    'storage_bucket' => 'blog-images'
];

/**
 * Load settings from JSON file if exists
 * This allows admin to update Supabase config without editing code
 */
$settingsFile = __DIR__ . '/../config/settings.json';
if (file_exists($settingsFile)) {
    $settings = json_decode(file_get_contents($settingsFile), true);
    if ($settings && isset($settings['supabase'])) {
        $supabaseConfig = array_merge($supabaseConfig, $settings['supabase']);
    }
}

/**
 * Get Supabase configuration
 * @return array
 */
function getSupabaseConfig() {
    global $supabaseConfig;
    return $supabaseConfig;
}

/**
 * Get site settings
 * @param string $key Setting key
 * @param mixed $default Default value if not found
 * @return mixed
 */
function getSiteSetting($key, $default = '') {
    global $settingsFile;
    if (file_exists($settingsFile)) {
        $settings = json_decode(file_get_contents($settingsFile), true);
        return $settings[$key] ?? $default;
    }
    return $default;
}

/**
 * Save site settings
 * @param array $settings
 * @return bool
 */
function saveSiteSettings($settings) {
    global $settingsFile;
    return file_put_contents($settingsFile, json_encode($settings, JSON_PRETTY_PRINT)) !== false;
}

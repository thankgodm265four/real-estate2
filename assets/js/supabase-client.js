// Supabase Client Initialization
// This file initializes the Supabase client for use across the frontend

let supabase = null;

/**
 * Initialize Supabase client with config from PHP
 */
function initSupabase(url, anonKey) {
    if (typeof window.supabase === 'undefined') {
        console.error('Supabase library not loaded. Please include Supabase CDN script.');
        return null;
    }

    supabase = window.supabase.createClient(url, anonKey);
    console.log('✅ Supabase client initialized');
    return supabase;
}

/**
 * Get Supabase client instance
 */
function getSupabase() {
    if (!supabase) {
        console.error('Supabase not initialized. Call initSupabase() first.');
    }
    return supabase;
}

/**
 * Check if user is authenticated
 */
async function isAuthenticated() {
    const sb = getSupabase();
    if (!sb) return false;

    const { data: { session } } = await sb.auth.getSession();
    return session !== null;
}

/**
 * Get current user
 */
async function getCurrentUser() {
    const sb = getSupabase();
    if (!sb) return null;

    const { data: { user } } = await sb.auth.getUser();
    return user;
}

/**
 * Sign in with email and password
 */
async function signIn(email, password) {
    const sb = getSupabase();
    if (!sb) return { error: 'Supabase not initialized' };

    const { data, error } = await sb.auth.signInWithPassword({
        email,
        password
    });

    return { data, error };
}

/**
 * Sign out
 */
async function signOut() {
    const sb = getSupabase();
    if (!sb) return { error: 'Supabase not initialized' };

    const { error } = await sb.auth.signOut();
    return { error };
}

/**
 * Upload file to Supabase Storage
 */
async function uploadFile(bucket, file, path = null) {
    const sb = getSupabase();
    if (!sb) return { error: 'Supabase not initialized' };

    // Generate unique filename if path not provided
    const fileName = path || `${Date.now()}-${file.name}`;

    const { data, error } = await sb.storage
        .from(bucket)
        .upload(fileName, file);

    if (error) return { error };

    // Get public URL
    const { data: { publicUrl } } = sb.storage
        .from(bucket)
        .getPublicUrl(data.path);

    return { data: { path: data.path, url: publicUrl }, error: null };
}

/**
 * Delete file from Supabase Storage
 */
async function deleteFile(bucket, path) {
    const sb = getSupabase();
    if (!sb) return { error: 'Supabase not initialized' };

    const { data, error } = await sb.storage
        .from(bucket)
        .remove([path]);

    return { data, error };
}

// Export for module usage (if needed)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initSupabase,
        getSupabase,
        isAuthenticated,
        getCurrentUser,
        signIn,
        signOut,
        uploadFile,
        deleteFile
    };
}

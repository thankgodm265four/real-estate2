<?php
/**
 * Create New Blog Post
 */

require_once __DIR__ . '/includes/header.php';
requireAuth();
?>

<script src="/assets/js/admin-blog.js"></script>

<script>
    document.getElementById('page-title').textContent = 'Create New Post';
    document.getElementById('page-subtitle').textContent = 'Write a new blog article';
</script>

<form id="createPostForm" class="max-w-4xl">
    
    <!-- Title -->
    <div class="admin-card mb-6">
        <label class="form-label">Title *</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            class="form-input text-2xl font-bold"
            placeholder="Enter post title..."
            required
        >
    </div>
    
    <!-- Slug -->
    <div class="admin-card mb-6">
        <label class="form-label">URL Slug *</label>
        <div class="flex items-center gap-2">
            <span class="text-gray-500">/blog/</span>
            <input 
                type="text" 
                id="slug" 
                name="slug" 
                class="form-input flex-1"
                placeholder="url-friendly-slug"
                required
            >
        </div>
        <p class="text-sm text-gray-500 mt-2">Auto-generated from title. Edit if needed.</p>
    </div>
    
    <!-- Excerpt -->
    <div class="admin-card mb-6">
        <label class="form-label">Excerpt</label>
        <textarea 
            name="excerpt" 
            id="excerpt"
            class="form-input"
            rows="3"
            placeholder="A brief summary of your post..."
        ></textarea>
        <p class="text-sm text-gray-500 mt-2">Optional. Used in post previews and SEO.</p>
    </div>
    
    <!-- Content -->
    <div class="admin-card mb-6">
        <label class="form-label">Content *</label>
        <textarea 
            name="content" 
            id="content"
            class="form-input font-mono"
            rows="15"
            placeholder="Write your post content here... (Markdown supported)"
            required
        ></textarea>
        <p class="text-sm text-gray-500 mt-2">You can use Markdown formatting.</p>
    </div>
    
    <!-- Featured Image -->
    <div class="admin-card mb-6">
        <label class="form-label">Featured Image</label>
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
            <input type="file" id="featuredImage" accept="image/*" class="hidden">
            <input type="hidden" id="featured_image_url" name="featured_image_url">
            
            <img id="imagePreview" src="" alt="Preview" class="hidden max-w-md mx-auto mb-4 rounded-lg">
            
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <button type="button" onclick="document.getElementById('featuredImage').click()" class="btn-primary">
                Choose Image
            </button>
            <p class="text-sm text-gray-500 mt-2">PNG, JPG up to 2MB. Recommended: 1200x800px</p>
        </div>
    </div>
    
    <!-- Status -->
    <div class="admin-card mb-6">
        <label class="form-label">Status *</label>
        <div class="flex items-center gap-4">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="status" value="draft" checked class="w-4 h-4 text-blue-600">
                <span>Draft</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="status" value="published" class="w-4 h-4 text-blue-600">
                <span>Published</span>
            </label>
        </div>
    </div>
    
    <!-- Actions -->
    <div class="flex items-center gap-4">
        <button type="submit" class="btn-primary">
            Create Post
        </button>
        <a href="/admin/posts.php" class="btn-secondary">
            Cancel
        </a>
    </div>
    
</form>

<script>
    // Initialize
    setupSlugGenerator();
    setupImageUpload('featuredImage', 'imagePreview', 'featured_image_url');
    saveBlogPost('createPostForm', false);
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

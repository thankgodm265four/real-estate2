// Blog Admin JavaScript
// Handles blog post creation, editing, and Supabase interactions

/**
 * Generate slug from title
 */
function generateSlug(title) {
    return title
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
}

/**
 * Auto-generate slug when title changes
 */
function setupSlugGenerator() {
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    if (!titleInput || !slugInput) return;

    titleInput.addEventListener('input', (e) => {
        if (!slugInput.dataset.manuallyEdited) {
            slugInput.value = generateSlug(e.target.value);
        }
    });

    // Mark as manually edited if user types in slug field
    slugInput.addEventListener('input', () => {
        slugInput.dataset.manuallyEdited = 'true';
    });
}

/**
 * Create new blog post
 */
async function createBlogPost(postData) {
    const sb = getSupabase();
    if (!sb) {
        throw new Error('Supabase not initialized');
    }

    const { data, error } = await sb
        .from('blog_posts')
        .insert([postData])
        .select()
        .single();

    if (error) throw error;
    return data;
}

/**
 * Update existing blog post
 */
async function updateBlogPost(slug, postData) {
    const sb = getSupabase();
    if (!sb) {
        throw new Error('Supabase not initialized');
    }

    const { data, error } = await sb
        .from('blog_posts')
        .update(postData)
        .eq('slug', slug)
        .select()
        .single();

    if (error) throw error;
    return data;
}

/**
 * Delete blog post
 */
async function deleteBlogPost(slug) {
    const sb = getSupabase();
    if (!sb) {
        throw new Error('Supabase not initialized');
    }

    const { error } = await sb
        .from('blog_posts')
        .delete()
        .eq('slug', slug);

    if (error) throw error;
}

/**
 * Get blog post by slug
 */
async function getBlogPost(slug) {
    const sb = getSupabase();
    if (!sb) {
        throw new Error('Supabase not initialized');
    }

    const { data, error } = await sb
        .from('blog_posts')
        .select('*')
        .eq('slug', slug)
        .single();

    if (error) throw error;
    return data;
}

/**
 * Get all blog posts
 */
async function getAllBlogPosts(status = null) {
    const sb = getSupabase();
    if (!sb) {
        throw new Error('Supabase not initialized');
    }

    let query = sb.from('blog_posts').select('*').order('created_at', { ascending: false });

    if (status) {
        query = query.eq('status', status);
    }

    const { data, error } = await query;

    if (error) throw error;
    return data;
}

/**
 * Check if slug is unique
 */
async function isSlugUnique(slug, currentSlug = null) {
    const sb = getSupabase();
    if (!sb) return true;

    let query = sb.from('blog_posts').select('slug').eq('slug', slug);

    // If editing, exclude current post
    if (currentSlug && currentSlug !== slug) {
        query = query.neq('slug', currentSlug);
    }

    const { data, error } = await query;

    if (error) return true;
    return data.length === 0;
}

/**
 * Handle image upload with preview
 */
function setupImageUpload(inputId, previewId, urlInputId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);
    const urlInput = document.getElementById(urlInputId);

    if (!input) return;

    input.addEventListener('change', async (e) => {
        const file = e.target.files[0];
        if (!file) return;

        // Show local preview
        const reader = new FileReader();
        reader.onload = (e) => {
            if (preview) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
        };
        reader.readAsDataURL(file);

        // Upload to Supabase
        const sb = getSupabase();
        if (!sb) {
            console.warn('Supabase not configured. Image will be lost on save.');
            return;
        }

        try {
            // Show loading
            input.disabled = true;
            input.parentElement.querySelector('.upload-status')?.remove();
            const status = document.createElement('p');
            status.className = 'upload-status text-sm text-blue-600 mt-2';
            status.textContent = 'Uploading...';
            input.parentElement.appendChild(status);

            // Upload
            const { data, error } = await uploadFile('blog-images', file);

            if (error) throw error;

            // Set URL
            if (urlInput) {
                urlInput.value = data.url;
            }

            // Update status
            status.textContent = '✓ Upload complete!';
            status.className = 'upload-status text-sm text-green-600 mt-2';
            input.disabled = false;
        } catch (error) {
            alert('Upload failed: ' + error.message);
            input.disabled = false;
        }
    });
}

/**
 * Save blog post form
 */
async function saveBlogPost(formId, isEdit = false) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const postData = {
            title: formData.get('title'),
            slug: formData.get('slug'),
            excerpt: formData.get('excerpt'),
            content: formData.get('content'),
            featured_image_url: formData.get('featured_image_url') || null,
            status: formData.get('status') || 'draft'
        };

        try {
            // Validate
            if (!postData.title) throw new Error('Title is required');
            if (!postData.slug) throw new Error('Slug is required');
            if (!postData.content) throw new Error('Content is required');

            // Check slug uniqueness
            if (!isEdit || formData.get('original_slug') !== postData.slug) {
                const unique = await isSlugUnique(postData.slug, formData.get('original_slug'));
                if (!unique) {
                    throw new Error('This slug is already in use. Please choose a different one.');
                }
            }

            // Save
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Saving...';

            if (isEdit) {
                await updateBlogPost(formData.get('original_slug'), postData);
            } else {
                await createBlogPost(postData);
            }

            alert('Post saved successfully!');
            window.location.href = '/admin/posts.php';
        } catch (error) {
            alert('Error: ' + error.message);
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.disabled = false;
            submitBtn.textContent = isEdit ? 'Update Post' : 'Publish Post';
        }
    });
}

// Export functions
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        generateSlug,
        setupSlugGenerator,
        createBlogPost,
        updateBlogPost,
        deleteBlogPost,
        getBlogPost,
        getAllBlogPosts,
        isSlugUnique,
        setupImageUpload,
        saveBlogPost
    };
}

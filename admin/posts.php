<?php
/**
 * All Blog Posts
 * List all blog posts with filter and actions
 */

require_once __DIR__ . '/includes/header.php';
requireAuth();
?>

<script src="/assets/js/admin-blog.js"></script>

<script>
    document.getElementById('page-title').textContent = 'All Posts';
    document.getElementById('page-subtitle').textContent = 'Manage your blog posts';
</script>

<!-- Actions Bar -->
<div class="flex items-center justify-between mb-6">
    <!-- Filter -->
    <div class="flex items-center gap-3">
        <select id="statusFilter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="">All Posts</option>
            <option value="published">Published</option>
            <option value="draft">Drafts</option>
        </select>
    </div>
    
    <!-- Create New -->
    <a href="/admin/create-post.php" class="btn-primary">
        <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        New Post
    </a>
</div>

<!-- Posts Table -->
<div class="admin-card">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody id="postsTableBody" class="bg-white divide-y divide-gray-200">
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                        Loading posts...
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Load posts
    async function loadPosts(status = null) {
        const tbody = document.getElementById('postsTableBody');
        tbody.innerHTML = '<tr><td colspan="4" class="px-6 py-12 text-center text-gray-500">Loading...</td></tr>';
        
        try {
            const posts = await getAllBlogPosts(status);
            
            if (!posts || posts.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" class="px-6 py-12 text-center text-gray-500">No posts found. <a href="/admin/create-post.php" class="text-blue-600 underline">Create your first post</a></td></tr>';
                return;
            }
            
            tbody.innerHTML = posts.map(post => `
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            ${post.featured_image_url ? `<img src="${post.featured_image_url}" alt="" class="w-12 h-12 rounded object-cover">` : ''}
                            <div>
                                <p class="font-medium text-gray-900">${post.title}</p>
                                <p class="text-sm text-gray-500">/blog/${post.slug}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs rounded-full ${post.status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'}">
                            ${post.status}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        ${new Date(post.created_at).toLocaleDateString()}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="/blog/post.php?slug=${post.slug}" target="_blank" class="text-blue-600 hover:text-blue-700" title="View">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </a>
                            <a href="/admin/edit-post.php?slug=${post.slug}" class="text-gray-600 hover:text-gray-700" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>
                            <button onclick="confirmDelete('${post.slug}')" class="text-red-600 hover:text-red-700" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join('');
        } catch (error) {
            tbody.innerHTML = `<tr><td colspan="4" class="px-6 py-12 text-center text-red-600">Error loading posts: ${error.message}</td></tr>`;
        }
    }
    
    // Delete confirmation
    async function confirmDelete(slug) {
        if (!confirm('Are you sure you want to delete this post? This action cannot be undone.')) {
            return;
        }
        
        try {
            await deleteBlogPost(slug);
            alert('Post deleted successfully!');
            loadPosts();
        } catch (error) {
            alert('Error deleting post: ' + error.message);
        }
    }
    
    // Filter change
    document.getElementById('statusFilter').addEventListener('change', (e) => {
        loadPosts(e.target.value || null);
    });
    
    // Initial load
    document.addEventListener('DOMContentLoaded', () => loadPosts());
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

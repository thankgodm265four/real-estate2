# Vercel Deployment for Kindreal Properties Blog

This guide will help you deploy your PHP blog to Vercel.

## Prerequisites

1. **Vercel Account** - Sign up at [vercel.com](https://vercel.com)
2. **GitHub Repository** - Your code should be pushed to GitHub
3. **Supabase** - Your Supabase credentials (already configured)

## Deployment Steps

### Step 1: Push to GitHub

```bash
git add .
git commit -m "Prepare for Vercel deployment"
git push origin main
```

### Step 2: Import Project to Vercel

1. Go to [vercel.com/new](https://vercel.com/new)
2. Click "Import Git Repository"
3. Select your GitHub repository
4. Click "Import"

### Step 3: Configure Project

**Framework Preset:** Other  
**Root Directory:** `./`  
**Build Command:** (leave empty)  
**Output Directory:** (leave empty)

### Step 4: Add Environment Variables (Optional)

If you need environment variables:

```
SUPABASE_URL=https://celwkzgkzmgtqbitnlzm.supabase.co
SUPABASE_ANON_KEY=sb_publishable_eMUQmAVZht9jfD17WxWKXw_51kG8Yy2
```

### Step 5: Deploy

Click **"Deploy"** button and wait for deployment to complete!

## Important Notes

### ✅ What Works on Vercel:
- All PHP pages
- Blog CMS
- Admin dashboard
- Supabase integration
- Static assets (CSS, JS, images)

### ⚠️ Limitations:
- **Sessions**: PHP sessions work differently on serverless. Consider using Supabase Auth for production
- **File uploads**: Use Supabase storage (already configured)
- **Database**: Must use external database (Supabase - already set up)

## Post-Deployment

### 1. Update Config (if needed)

If paths need updating for production, edit `config/supabase.php`

### 2. Test Your Site

- Homepage: `https://your-site.vercel.app`
- Blog: `https://your-site.vercel.app/blog.php`
- Admin: `https://your-site.vercel.app/admin/login.php`

### 3. Custom Domain (Optional)

1. Go to your Vercel project
2. Click "Settings" → "Domains"
3. Add your custom domain

## Recommended: Upgrade to Supabase Auth

For production, replace session-based auth with Supabase Auth:

1. Enable Supabase Authentication in your Supabase dashboard
2. Update `/admin/login.php` to use Supabase signIn
3. Update auth-check.php to validate Supabase session

Code is already prepared for this in the login page!

## Troubleshooting

### Sessions Not Working?

Vercel serverless functions are stateless. For production, use:
- Supabase Auth (recommended)
- JWT tokens
- Cookie-based auth with external session store

### Images Not Loading?

Make sure all image paths are absolute or use Supabase storage URLs.

### Admin Can't Login?

- Check environment variables are set
- Verify Supabase credentials
- Consider upgrading to Supabase Auth

## File Structure

```
realestate2/
├── vercel.json         ← Vercel configuration
├── index.php           ← Homepage
├── blog.php            ← Blog page
├── admin/              ← Admin section
│   ├── index.php       ← Dashboard
│   ├── login.php       ← Login page
│   └── ...
├── config/             ← Configuration
├── assets/             ← Static files
└── sections/           ← Page sections
```

## Quick Deploy Checklist

- [x] ✅ `vercel.json` created
- [ ] 📤 Code pushed to GitHub
- [ ] 🔗 Repository imported to Vercel
- [ ] ⚙️ Environment variables configured (optional)
- [ ] 🚀 Deployed!
- [ ] 🧪 Tested all pages
- [ ] 🌐 Custom domain added (optional)

---

**Your site is ready for Vercel deployment!** 🎉

Deploy now: [vercel.com/new](https://vercel.com/new)

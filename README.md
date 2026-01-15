# Kindreal Properties Blog

Modern real estate blog with premium design and powerful CMS.

## 🚀 Deploy to Vercel

[![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/YOUR_USERNAME/realestate2)

## 🌟 Features

- **Premium Blog Design** - Dark, cinematic UI with glassmorphism
- **Powerful CMS** - WordPress-like admin dashboard
- **Supabase Backend** - Scalable database and storage
- **Mobile Responsive** - Works perfectly on all devices
- **Admin Authentication** - Secure session-based auth
- **GSAP Animations** - Smooth, professional animations

## 📋 Requirements

- PHP 8.2+
- Supabase account (for database & storage)
- Vercel account (for deployment)

## 🛠️ Local Development

```bash
# Start PHP server
php -S localhost:8000

# Visit
http://localhost:8000
```

## 🔐 Admin Access

**Login:** `http://localhost:8000/admin/login.php`

**Default Credentials:**
- Email: `admin@kindreal.com`
- Password: `admin123`

## 📁 Project Structure

```
realestate2/
├── admin/              # Admin dashboard & CMS
├── assets/             # CSS, JS, images
├── config/             # Configuration files
├── includes/           # Reusable components
├── sections/           # Page sections
├── index.php           # Homepage
├── blog.php            # Blog page
└── vercel.json         # Vercel config
```

## ⚙️ Configuration

Edit `config/settings.json`:

```json
{
  "supabase": {
    "url": "YOUR_SUPABASE_URL",
    "anon_key": "YOUR_SUPABASE_KEY",
    "storage_bucket": "blog-images"
  }
}
```

## 📚 Documentation

- [Vercel Deployment Guide](VERCEL_DEPLOYMENT.md)
- Admin dashboard: `http://your-site.com/admin/`

## 🤝 Support

For issues or questions, contact Kindreal Properties.

## 📄 License

All rights reserved - Kindreal Properties

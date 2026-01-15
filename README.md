# Real Estate Website

A modern, responsive real estate website built with PHP and Tailwind CSS.

## Features
- **Responsive Design**: Mobile-first approach using Tailwind CSS.
- **Dynamic Content**: PHP-based templating for easy content management.
- **Interactive Elements**: 3D animations, sticky navigation, and smooth scrolling.
- **Pages**:
  - Home (Landing Page)
  - About Us
  - Projects
  - Services
  - Contact
  - Blog
  - Testimonials

## Development

1. **Install Dependencies**:
   ```bash
   npm install
   ```

2. **Run Development Server**:
   ```bash
   npm run dev
   ```
   This will watch for CSS changes and rebuild Tailwind.

3. **Start PHP Server**:
   ```bash
   php -S localhost:8000
   ```

## Deployment

### Vercel
This project is configured for deployment on Vercel using `vercel-php`.
1. Install Vercel CLI: `npm i -g vercel`
2. Run `vercel` in the project directory.

### Docker
1. Build the image:
   ```bash
   docker build -t realestate-website .
   ```
2. Run the container:
   ```bash
   docker run -p 8080:80 realestate-website
   ```

### Standard Hosting
Upload all files to your PHP-enabled web server (Apache/Nginx). Ensure `assets/css/output.css` is generated before uploading.

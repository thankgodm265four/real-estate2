# Build stage for Tailwind CSS
FROM node:18 AS build
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Production stage
FROM php:8.2-apache
WORKDIR /var/www/html

# Enable mod_rewrite for routing
RUN a2enmod rewrite

# Copy application files
COPY . .

# Copy built CSS from build stage
COPY --from=build /app/assets/css/output.css ./assets/css/output.css

# Set permissions
RUN chown -R www-data:www-data /var/www/html

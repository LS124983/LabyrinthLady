# Labyrinth Lady Website Refresh

This project is a full refresh of the Labyrinth Lady WordPress website. It includes major frontend and backend improvements, new features, SEO enhancements, and responsive design updates.

> ⚠️ This repository **does not include WordPress core files** or the live database to keep the repo lightweight and avoid exposing private data. See the instructions below to get it running locally.

---

## 🔧 Features Implemented

- Homepage refresh (new video, intro section, testimonial redesign with "Read More" feature)
- Search bar with global functionality
- Bundle feature with updated pricing and inventory management
- Email-to-PDF form integration with error handling and validation
- Improved navigation bar (UI hover effects, mobile support, consistent layout)
- Backend crash fixes, code cleanup, and performance optimization
- SEO updates using Yoast SEO
- Responsive design across all pages
- Plugin-based enhancements for contact forms, caching, event calendar, PDF forms, and more

---

## 🧰 Plugins Used

- Contact Form 7  
- Elementor  
- LiteSpeed Cache  
- PDF Forms Filler for CF7  
- Popup Maker  
- Royal Elementor Addons  
- Site Kit by Google  
- SiteOrigin CSS  
- Spectra  
- The Events Calendar  
- WooCommerce  
- WooCommerce PayPal Payments  
- WordPress Importer  
- WP Bulk Delete  
- WP Mail SMTP  
- WPC Product Bundles for WooCommerce  
- Yoast SEO  

---

## 🚀 Getting Started

To run this website locally with XAMPP or a similar stack:

1. **Install WordPress** on your machine (download from [wordpress.org](https://wordpress.org/download/)).
2. **Clone this repository** into your WordPress installation directory:
    ```
    git clone https://github.com/yourusername/labyrinth-lady-site.git
    ```
    Move the contents (typically the `wp-content/` folder and any setup files) into your WordPress directory, e.g.:
    ```
    C:\xampp\htdocs\wordpress\wp-content\
    ```
3. **Create a new database** using phpMyAdmin (e.g., `labyrinthlady_db`).
4. **Set up WordPress** in your browser at `http://localhost/wordpress/`.
5. **Manually reconfigure settings** (theme, plugins, menus, etc.) via the WordPress admin panel.

*Note: Due to privacy concerns, we have not included the production database. You will need to set up your own local database and reconfigure pages manually, or optionally use placeholder content.*

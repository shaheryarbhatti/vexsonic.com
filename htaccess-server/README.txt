================================================================
  VexSonic — Server .htaccess Files
================================================================

This folder contains PRODUCTION SERVER versions of .htaccess.
DO NOT use these on localhost/XAMPP — use the existing ones.

FILES:
------
1. public-.htaccess  →  Upload to:  /public/.htaccess  on your server
2. root-.htaccess    →  Upload to:  /.htaccess  (Laravel root) on server

UPLOAD STEPS:
-------------
Step 1: Download public-.htaccess
        Rename it to:  .htaccess
        Upload to:     yoursite.com/public/.htaccess

Step 2: Download root-.htaccess
        Rename it to:  .htaccess
        Upload to:     yoursite.com/.htaccess  (root Laravel folder)

IMPORTANT NOTES:
----------------
- Replace "vexsonic.com" with your actual domain in public-.htaccess
- Uncomment the HTTPS redirect lines when your SSL certificate is active
- Uncomment HSTS header after confirming HTTPS works correctly
- For shared hosting (Hostinger/cPanel): if domain points to /public,
  you may skip the root-.htaccess entirely

================================================================

# -*- coding: utf-8 -*-

HTACCESS = """AddDefaultCharset UTF-8

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?_url=/$1 [QSA,L]
"""

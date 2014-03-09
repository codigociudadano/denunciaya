  server {
    listen 80;
    # Use these domain names
    server_name local.denunciaya.com 
    # Your PATH HERE ! 
    root /vagrant/src/core/Symfony/web;
    index app_dev.php;

    location / {
        # try to serve file directly, fallback to rewrite
        try_files $uri @rewriteapp;
    }

    location @rewriteapp {
        # rewrite all to app.php
        rewrite ^(.*)$ /app_dev.php/$1 last;
    }

    location ~ ^/(app|app_dev|config)\.php(/|$) {
        include fastcgi.conf;
        # SELECT YOUR CONNECTION MODE TO FPM
        fastcgi_pass 127.0.0.1:9000;
        #fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        fastcgi_param HTTPS off;
        fastcgi_intercept_errors on;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_read_timeout 10m;
    }

    error_log /var/log/nginx/denunciaya_frontend_error.log;
    access_log /var/log/nginx/denunciaya_frontend_access.log;
}

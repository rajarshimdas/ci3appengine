Setting up Nginx on Ubuntu LTS
Ref: https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/

1. Update /etc/nginx/fastcgi_params (Script available in this folder)
2. Modify the sample (ci3appengine.conf) in server block to invoke php-fpm. Add to /etc/nginx/sites-enabled.

Setting up Nginx on Ubuntu LTS
Ref: https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/

1. Update /etc/nginx/fastcgi_params (Script available in this folder)
2. Use the following in server block to invoke php-fpm.

location ~ [^/]\.php(/|$) {
    fastcgi_split_path_info ^(.+?\.php)(/.*)$;
    if (!-f $document_root$fastcgi_script_name) {
        return 404;
    }

    # Mitigate https://httpoxy.org/ vulnerabilities
    fastcgi_param HTTP_PROXY "";

    fastcgi_pass unix:/run/php/php8.1-fpm.sock;
    fastcgi_index index.php;

    # include the fastcgi_param setting
    include fastcgi_params;

    # SCRIPT_FILENAME parameter is used for PHP FPM determining
    #  the script name. If it is not set in fastcgi_params file,
    # i.e. /etc/nginx/fastcgi_params or in the parent contexts,
    # please comment off following line:
    # fastcgi_param  SCRIPT_FILENAME   $document_root$fastcgi_script_name;
}

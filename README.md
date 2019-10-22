# nginx_lb
Basic demo with proxy and XFF

Docker images used
* richarvey/nginx-php=fpm
* NGINX PLUS

* Built a docker network 
``docker network create --subnet=172.10.1.0/24 docnet``

php1

``docker run --net docnet --ip 172.10.1.21 -p 81:80 -v ~/nginx_demos/php1/:/var/www/html/ --name php1 -h php1.nginx.lab -dit richarvey/nginx-php-fpm``

lb_php

``docker run --net docnet --ip 172.10.1.20 -p 8081:80 -v ~/nginx_demos/lb_plus/lb_php/:/etc/nginx/conf.d/lb_php.conf --name lb_php -h lb_php.nginx.lab -dit nginx``

# nginx_lb
Basic demo with proxy and XFF

Docker images used
* richarvey/nginx-php=fpm {upstreams}
* NGINX PLUS              {load balancer}


Download the Nginx [Dockerfile](https://github.com/dockerfile/nginx) and place the Dockerfile and your nginx-repo.cert and nginx-repo.key in the docker directory

Build a docker network 
``docker network create --subnet=172.10.1.0/24 docnet``

php1

``docker run --net docnet --ip 172.10.1.21 -p 81:80 -v ~/nginx_lb/php1/:/var/www/html/ --name php1 -h php1.nginx.lab -dit richarvey/nginx-php-fpm``

php2

``docker run --net docnet --ip 172.10.1.22 -p 82:80 -v ~/nginx_lb/php2/:/var/www/html/ --name php2 -h php2.nginx.lab -dit richarvey/nginx-php-fpm``

php3

``docker run --net docnet --ip 172.10.1.23 -p 83:80 -v ~/nginx_lb/php3/:/var/www/html/ --name php3 -h php3.nginx.lab -dit richarvey/nginx-php-fpm``


I created two additional folders, php2 and php3 and modify line 2 on index.php to read "Web 2" and "Web 3"

lb_php

``docker run --net docnet --ip 172.10.1.20 -p 8081:80 -v ~/nginx_lb/lb_php/:/etc/nginx/conf.d/lb_php.conf --name lb_php -h lb_php.nginx.lab -dit nginx``

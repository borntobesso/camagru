# camagru
The goal of this project is to build a web application  allowing you to make basic photo and video editing using your webcam and some predefined images.

### Containerization
[Docker configuration for php-Apache and MySQL](https://doc4dev.com/en/create-a-web-site-php-apache-mysql-in-5-minutes-with-docker/)

[Added PhpMyAdmin service](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)

build docker image with name
`docker build -t webserver .`

run docker container with the container name and built image name
`docker run -it --rm -d -p 8080:80 --name web webserver`

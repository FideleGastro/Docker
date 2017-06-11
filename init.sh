#sudo docker build -t my-php-app .
sudo docker run -p 8080:80 --rm --name some-mysql -e MYSQL_ROOT_PASSWORD=123456 -d mysql
sudo docker run -p 8181:80 --rm --name some-app --link some-mysql:mysql -d my-php-app

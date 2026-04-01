FROM php:8.2-apache
RUN echo "DirectoryIndex Portfolio.php" >> /etc/apache2/apache2.conf
COPY . /var/www/html/
EXPOSE 80
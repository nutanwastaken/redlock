#Menggunakan image mysql terbaru dari dockerhub
FROM mysql:latest

#Membuat beberapa enviroment variables
#Set user root password to root
ENV MYSQL_ROOT_PASSWORD=root

#Initializing a new user with password pass
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=pass

#Creating a new database
ENV MYSQL_DATABASE=redlock

#Copying backup sql file to entrypoint for initdb to import sql to new database redlock
COPY redlock-db.sql /docker-entrypoint-initdb.d/redlock-db.sql
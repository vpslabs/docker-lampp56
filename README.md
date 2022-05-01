# Docker LAMPP Apache, MySQL, PHP 5.6
This docker contain:
- PHP version : 5.6
- PHPMyAdmin : 5.1.3
- MySQL version : 5.0
- Server version : Apache 2.4

host : localhost:80 (Simply you can call by accessing localhost only without port)

phpmyadmin
ports mapping >> 56:80
environment:
 - PMA_HOST=db
 - PMA_USER=root
 - PMA_PASSWORD=secret

## How to use

1. Make sure [docker](https://itgov.id/cara-install-docker-linux/) and [docker-compose](https://docs.docker.com/compose/install/) is installed on your machine.
2. Clone this repository to your local machine with this command.
    ```bash
    https://github.com/vpslabs/docker-lampp56.git
    ```
    then cd into the directory
    ```bash
    cd docker-lampp56
    ```
3. Run `docker-compose` to start the container.
    ```bash
    docker-compose up -d
    ```
4. Then you can open `apache` server at `http://localhost:80` and `phpmyadmin` at `http://localhost:56`
5. Place your `php` project at `public_html` directory, and you ready to go!

You can change your `mysql` password on `docker-compose.yml` file.
------------------------------------------------------------------


Docker dengan Apache, MySQL dan PHP 5.6

## Cara Install

1. Pastikan [docker dan docker-compose](https://itgov.id/cara-install-docker-linux/) sudah terinstal, apabila belum ikuti link tersebut.
2. Clone repository ini ke dalam mesin Linux komputer local.
    ```bash
    https://github.com/vpslabs/docker-lampp56.git
    ```
    masuk ke direktori hasil download atau bisa gunakan perintah cd berikut
    ```bash
    cd docker-lampp56
    ```
3. Jalankan `docker-compose` untuk mengaktifkan container.
    ```bash
    docker-compose up -d
    ```
4. Akses server `apache` melalui `http://localhost:80` dan `phpmyadmin` melalui `http://localhost:56`
5. Letakkan file atau proyek `php` di dalam folder `public_html` , dan siap digunakan!

Anda bisa mengganti password `mysql` dengan mengedit file `docker-compose.yml` .

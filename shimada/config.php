<?php

/*

create database filename_php;
grant all on filename_php.* to dbuser@localhost
identified by 'S@23cB7x';

use filename_php

create table users(
id int not null auto_increment primary key,
google_user_id varchar(30) unique,
google_email varchar(255),
google_name varchar(255),
google_picture varchar(255),
google_access_token varchar(255),
created datetime,
modified datetime
);

define('DSN',
'mysql:host=localhost;dbname=filename_php');
define('DB_USER','dbuser');
define('DB_PASSWORD','S@23cB7x');

define('CLIENT_ID', '')
define('CLIENT_SECRET', '')

define('SITE_URL', '')

error_reporting(E_ALL & -E_NOTICE);

session_set_cookie_params(0, '/google_connect_php/');


?>
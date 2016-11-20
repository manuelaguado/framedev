<?php
define('DEVELOPMENT', true, true);
define('DIR_FILES','/var/www/html/',true);

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'sinergia');
define('DB_USER', 'root');
define('DB_PASS', 'kls2qr824');

define('DOMAIN','172.20.8.15');
define('URL_APP','http://'.DOMAIN.'/',true);
define('SITE_NAME','F R A M E D E V',true);
define('SLOGAN_NAME','Activemedia & DCID Software',true);


/*Configuracion para envio de correo via perl mail*/
define('MAIL_HOST','smtp.gmail.com');
define('MAIL_USERNAME','diskmemory@gmail.com');
define('MAIL_PASSWORD','Manu3l4gu4d@');
define('MAIL_FROM','diskmemory@gmail.com');


/*Zona horaria*/
date_default_timezone_set('America/Mexico_City');

/*Variables*/
define('URL_CONTROLADOR','../Framedev/Controladores/',true);
define('URL_MODELO','../Framedev/Modelos/',true);
define('URL_VISTA','../vistas/',true);
define('URL_TEMPLATE','../vistas/plantilla/',true);
define('SITE','../vistas/site/',true);
define('URL_PUBLIC',URL_APP.'',true);


/*Móvil*/
define('URL_TEMPLATE_FW7','../vistas/framework7/',true);
define('FW7',URL_PUBLIC.'fw7/',true);
define('MATERIAL',URL_PUBLIC.'material/',true);








//API DE GOOGLE MAPS
define('GOOGLE_MAPS','AIzaSyB6pYgK5OlpIt-eHK4n89vwpQkn_X81Ezw',false);

/*
//SOCKET_PROVIDER: ABLY
define('ABLY_API_KEY','oa0Uog.EpU3tw:DUc4iwogyh_mf7kI',false);
define('ABLY_PRESENCE','activos',false);

//SOCKET_PROVIDER: PUBNUB
define('PUBNUB_PUBLISH','pub-c-e16249c1-04c4-42ed-9395-d68cb1761316',false);
define('PUBNUB_SUSCRIBE','sub-c-119e0460-3b00-11e6-ba28-02ee2ddab7fe',false);
define('PUBNUB_SECRET','sec-c-Mzk1ODhkOWEtYjJiNS00NGZiLTgzMjUtZmU3NzhkNzY5YjQ1',false);
define('PUBNUB_PRESENCE','presence-activos',false);

//SOCKET_PROVIDER: PUSHER
define('PUSHER_APP_ID','215019',false);
define('PUSHER_KEY','d218cde0c2919b774920',false);
define('PUSHER_SECRET','251c78de7d180e78e230',false);
define('PUSHER_PRESENCE','presence-activos',false);

//Seleccionar SOCKET_PROVIDER
define('SOCKET_PROVIDER','PUSHER',false);

//Modo de operacion cron WEBHOOK ó CURL
define('PRESENCE_GET','CURL',false);

*/
?>

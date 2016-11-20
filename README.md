<p align="center"><img width="200"src="https://dl.dropboxusercontent.com/u/345760/framedev.png"></p><br><br>
## Acerca de FRAMEDEV

FRAMEDEV es un marco de trabajo escrito en PHP que permite el rápido desarrollo de aplicaciones que requieren caracteristicas basicas preimplementadas como lo son:

- Página de login
- Control y registro de logins
- Control de errores en el login para auditoría
- Control de sesiones duplicadas
- Edición de perfil de usuario
- Forzar cambio de contraseña al iniciar sesión
- Sistema RBAC para el manejo de roles y permisos de aplicación
- Deshabilitar / Habilitar usuarios
- Deshabilitar / Habilitar el login
- Administración de control de usuarios logueados
- Tiempo de sesión por inactividad
- Aceptar / Rechazar Términos y condiciones para continuar usando una cuenta
- Bloqueo de cuenta por inactividad
- [Debugger] (https://github.com/barbushin/php-console)
- Escrito en PHP7
- Templates para correos
- Templates para PDF
- Templates para Excel
- Frontend Web


##Instalar
        -apt-get install php7.0-xml
        -apt-get install php7.0-gd

editar:

        -nano /etc/mysql/mysql.conf.d/mysqld.cnf

poner al final:

        -sql_mode="NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"

instalar composer:

        -curl -sS https://getcomposer.org/installer | php
        -sudo mv composer.phar /usr/local/bin/composer





Third-party

Material Admin Responsive + AngularJs

	https://wrapbootstrap.com/theme/material-admin-responsive-angularjs-WB011H985

Metronic - Responsive Admin Dashboard Template

	https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?s_rank=1
	
PHP-Console

	https://chrome.google.com/webstore/detail/php-console/nfhmhhlpfleoednkpnnnkolmclajemef?hl=es-419

Clip-One - Bootstrap 3 Responsive Admin Template

	https://themeforest.net/item/clipone-bootstrap-3-responsive-admin-template/5881143
	
Para mail via PEAR Mail:
        -Instalamos pear
            sudo apt-get install php-pear
    
        -Instalamos las librerias de pear necesarias
            sudo pear install mail
            sudo pear install Net_SMTP
            sudo pear install mail_mime
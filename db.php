
<?php
    define('_HOST_NAME','localhost');
    define('_DATABASE_NAME','semana5');
    define('_DATABASE_USER_NAME','root');
    define('_DATBASE_PASSWORD','');

    $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,
    _DATBASE_PASSWORD,_DATABASE_NAME);

    if($MySQLiconn->connect_errno){
      die("ERROR: ->".$MySQLiconn->connect_error);
    }

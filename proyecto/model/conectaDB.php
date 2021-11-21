<?php

class conectadb {
    
    public static function dbmysql() {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        // Base de datos incial
        // $db_db = 'information_schema';
        $db_db = 'bd_webucam';

        $mysqli = @new mysqli(
                        $db_host,
                        $db_user,
                        $db_password,
                        $db_db
        );
            
        if ($mysqli->connect_error) {
            echo 'La conexión a la base de datos de MYSQL No es correcta.';
            echo 'Errno: ' . $mysqli->connect_errno;
            echo '<br>';
            echo 'Error: ' . $mysqli->connect_error;
            exit();
        }
        return $mysqli;
    }    
    
}


?>
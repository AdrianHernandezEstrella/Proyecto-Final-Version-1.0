<?php
    include 'conectaDB.php';
class alumnos {
    public $id;
    public $alumno;
    public $nombre;
    public $sexo;
    
    public function __construct($id, $alumno, $nombre, $sexo) {  
        $this->id = $id;
        $this->alumno = $alumno;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }  

    public static function consultar() {
        $mysqli = conectadb::dbmysql();
        $consulta = "select * from alumnos";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaAlumnos = [];
        while ($alumno = mysqli_fetch_array($resultado)) {
            $listaAlumnos[] = new alumnos($alumno['id'], $alumno['alumno'],$alumno['nombre'], $alumno['sexo']);
        }
        $mysqli->close();
        return $listaAlumnos;
    }
    public static function login($_user, $_pass) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT user, pass FROM user WHERE user = ? and pass = ?');
        $stmt->bind_param('ss', $_user, $_pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($filasql = mysqli_fetch_array($resultado)) {
        // Imprimir por Arreglo Asociado
        echo $filasql['user'] . ' ';
        echo $filasql['pass'] . ' ';
        // initialize session variables
        session_start();
        // $_SESSION['loggedDataTime'] = datatime();
        $_SESSION['loggedUserName'] = $filasql['user'] ;
        }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
        $acceso = true;
        }
        $mysqli->close();
        return $acceso;
        }

        public static function delete($_idalumno) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('DELETE FROM alumnos WHERE id = ? ');
            $stmt->bind_param('i', $_idalumno);
            $stmt->execute();
            $resultado = $stmt->get_result();
            }
        public static function update($_alumno,$_nombre,$_sexo,$_id) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('UPDATE alumnos SET alumno=?, nombre = ?, sexo = ? WHERE id = ?');
            $stmt->bind_param('sssi', $_alumno,$_nombre,$_sexo,$_id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $acceso = false;
            if ($stmt->affected_rows == 1) {
                $acceso = true;
            }
            $mysqli->close();
            return $acceso;

        }
        public static function consultaralumno($_idalumno) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('SELECT * FROM alumnos WHERE id = ?');
            $stmt->bind_param('i', $_idalumno);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fila = $resultado->fetch_array();
            return $fila;
        }
}
    
?>
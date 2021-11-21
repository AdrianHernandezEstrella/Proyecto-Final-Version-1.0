<?php?>
<?php
if (filter_input_array(INPUT_POST)) {
    $_id = trim(filter_input(INPUT_POST, 'id'));
    $_alumno = trim(filter_input(INPUT_POST, 'alumno'));
    $_nombre = trim(filter_input(INPUT_POST, 'nombre'));
    $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
    include_once '../model/alumnos.php';
    $update = alumnos::update($_alumno,$_nombre,$_sexo,$_id);
    if ($update){
        header("location: ../index.php?menu=alumnos");
        } else{
        echo 'Error, no se pudo actualizar';
        }
}
?>
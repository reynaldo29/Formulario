<?php
// carga este archivo una sola vez y
// permanece el que fue cargado primero
include_once 'db.php';
/* si la variable esta definida y es diferente de cero*/

// insert data
if(isset($_POST['save'])){
    $fn = $MySQLiconn->real_escape_string($_POST['fn']);
    $ln = $MySQLiconn->real_escape_string($_POST['ln']);

    $SQL = $MySQLiconn->query("INSERT INTO data(fn,ln)
          VALUES('$fn','$ln')");
    if(!$SQL){
      echo $MySQLiconn->error;
    }
}

// eliminar
if(isset($_GET['del'])){
      $SQL = $MySQLiconn->query("DELETE FROM data WHERE id=".$_GET['del']);
      header("Location:index.php");
}
// update
if(isset($_GET['edit'])){
      $SQL=$MySQLiconn->query("SELECT *FROM data WHERE id=".$_GET['edit']);
      $getRow=$SQL->fetch_array();/* me devuelve un array de la base de datos*/
}

if(isset($_POST['update'])){
      $SQL=$MySQLiconn->query("UPDATE data SET fn='".$_POST['fn']."', ln='".$_POST['ln']."' WHERE id=".$_GET['edit']);

    header("Location: index.php");
}
 ?>

<?php include_once 'crud.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lab05</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- el center centra todos los elementos en texto  -->
  <center>
      <br>
      <br>
      <div id="form">
          <form method="post">
              <table width="100%" border="1" cellpading="15" >
                  <tr>
                    <!-- el name es como una variable -->
                    <td><input type="text" name="fn" placeholder="Nombre" value="<?php
                    if(isset($_GET['edit'])) echo $getRow['fn'];?>"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="ln" placeholder="Apellido" value="<?php
                    if(isset($_GET['edit'])) echo $getRow['ln'];?>"></td>
                  </tr>
                  <tr>

                    <!-- Boton cambia registrar /Actualizar -->
                    <td>
                        <?php
                        if(isset($_GET['edit'])){
                        ?>
                          <button type="submit" name="update">Actualizar</button>
                        <?php
                      }else{
                        ?>
                        <button type="submit" name="save">Registrar</button>
                        <?php
                      }
                        ?>
                    </td>
                  </tr>
              </table>
          </form>
          <br><br>

          <!--  muestra tabla para hacer el registro de la base de datos -->
          <table width="100%" border="1" cellpading="15" align= "center">
            <?php
            $res=$MySQLiconn->query('SELECT * FROM data');
            while ($row=$res->fetch_array()) {
            ?>
              <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['fn'];?></td>
                  <td><?php echo $row['ln'];?></td>
                  <!-- Envia el del y el edit por url -->
                  <td><a href="?del=<?php echo $row['id'];?>"
                  onclick="return confirm('Confirmar Eliminar')">Eliminar</a> </td>
                  <td><a href="?edit=<?php echo $row['id'];?>"
                  onclick="return confirm('Confirmar edicion')">Editar</a> </td>
              </tr>
            <?php
            }
             ?>
          </table>
      </div>
  </center>

  </body>
</html>

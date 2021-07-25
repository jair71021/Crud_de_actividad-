<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT  id_personas, 
                    nombre,
                    apellidopaterno,
                    apellidomaterno,
                    fechanacimiento,
                    sexo,fecharegistro
            FROM t_registros_personas ";
    $respuesta = mysqli_query($conexion, $sql);
?>
  
  <table id="tablaObjetivo" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
            <th>id</th>
            <th>Nombre             </th>
            <th>Apellido paterno   </th>
            <th>Apellido materno   </th>
            <th>Fecha de nacimiento</th>
            <th>Sexo               </th>
            <th>Fecha de registro</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
      </thead>
      <tbody>
      <?php 
        while($ver = mysqli_fetch_array($respuesta)) {  
        ?>
        <tr>
            <td><?php echo $ver['id_personas'];?>     </td>
            <td><?php echo $ver['nombre'];?>          </td>
            <td><?php echo $ver['apellidopaterno']; ?></td>
            <td><?php echo $ver['apellidomaterno']; ?></td>
            <td><?php echo $ver['fechanacimiento']; ?></td>
            <td><?php echo $ver['sexo']; ?></td>
            <td><?php echo $ver['fecharegistro']; ?></td>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idPersonas" value="<?php echo $ver['id_personas']?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminarRegistro.php" method="POST">
                    <input type="text" hidden name="idPersonas" value="<?php echo $ver['id_personas']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <th>id                  </th>
          <th>Nombre              </th>
          <th>Apellido paterno    </th>
          <th>Apellido materno    </th>
          <th>Fecha de nacimiento </th>
          <th>Sexo                </th>
          <th>Fecha de registro</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </tfoot>
</table>

<?php
    $idPersonas = $_POST['idPersonas'];

    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_personas, 
                    nombre ,
                    apellidopaterno ,
                    apellidomaterno ,
                    fechanacimiento ,
                    sexo ,
                    fecharegistro
            FROM t_registros_personas
            WHERE id_personas= '$idPersonas'";
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);

?>


<?php include "header.php"; ?>

  
  <div class="container" >
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light"> Editar Registros De Personaa</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/actualizarRegistro.php" method="POST" >
                            <input type="text" hidden name="idPersonas" value="<?php echo $datos['id_personas']?>">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" required  class="form-control"  value="<?php echo $datos['nombre'] ?>">
                            <label for="apellidopaterno">Apellidos Paterno</label>
                            <input type="text" name="apellidopaterno" required class="form-control" value="<?php echo $datos['apellidopaterno'] ?>">
                            <label for="apellidomaterno">Apellidos Materno</label>
                            <input type="text" name="apellidomaterno" required class="form-control" value="<?php echo $datos['apellidomaterno'] ?>">
                            <label for="fechanacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechanacimiento" required class="form-control" value="<?php echo $datos['fechanacimiento'] ?>">
                            <label for="sexo">Sexo</label>
                      <!--      <input type="text" name="sexo" required class="form-control" value="<?php echo $datos['sexo'] ?>">  -->

                      
                            <select name="sexo" required class="form-control" class="form-control" value="<?php echo $datos['sexo'] ?>">
                            <option value=""></option>
                            <option value="Hombre" >Hombre</option>
                            <option value="Mujer">Mujer</option>
                            </select>
                      
                            <br>
                            <button class=" btn btn-outline-info">Actualizar</button>
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
  </div>


<?php include "footer.php"; ?>


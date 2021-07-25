
<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container" >
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Registros De Personaa</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/agregarRegistro.php" method="POST" >
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre"  class="form-control" required></input>
                            <label for="apellidopaterno">Apellidos Paterno</label>
                            <input type="text" name="apellidopaterno" required class="form-control">
                            <label for="apellidomaterno">Apellidos Materno</label>
                            <input type="text" name="apellidomaterno" required class="form-control">
                            <label for="fechanacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechanacimiento" required class="form-control">
                            <label for="sexo">Sexo</label>
                    <!--       <input type="text" name="sexo" required class="form-control">-->  
                            <select name="sexo" required class="form-control">
                            <option value=""></option>
                            <option value="Hombre" >Hombre</option>
                            <option value="Mujer">Mujer</option>
                            </select>
                            <br>
                            <button class=" btn btn-outline-success">Guardar</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de registro</h3>
                        <?php include "tablaRegistro.php";?>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>


<?php include "footer.php"; ?>


<?php
include"./conexion.php";
include"./header.php";
$conexion=conexion();
$id = $_GET ['idp'];
$sql = "SELECT*FROM t_paises WHERE id='$id' ";
$respuesta = mysqli_query($conexion,$sql);
//convierte u  arreglo asociativo
$item = mysqli_fetch_array($respuesta);
?>
<html>
    <div class="container">
    <h2>Editar</h2>
        <div class="col">
            <div class="row">
                <table class="table table-success table-striped">
                    <form action="./backend/editar.php" method="POST">
                        <input type="text" name="id" value="<?php echo $id;?>" hidden>
                        <label for="nombrePais">Nombre</label>
                        <br>
                        <input type="text" name="nombrePais" id="nombrePais" value="<?php echo $item['nombrePais']?>">
                        <br>
                        <label for="continente">Continente</label>
                        <br>
                        <select name="continente" id="continente">
                            <option value="Europa">Europa</option>
                            <option value="Africa">Africa</option>
                            <option value="America">America</option>
                            <option value="Asia">Asia</option>
                            <option value="Oceania">Oceania</option>
                        </select>
                        <br>
                        <label for="bandera">Bandera</label>
                        <br>
                        <input type="text" name="bandera" id="bandera" value="<?php echo $item['bandera']?>">
                        <hr>
                        <button class="btn btn-success">Actualizar</button>
                        <hr>
                        <a href="./index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </table>
                
            </div>
        </div>
    </div>
</html>
<?php
include"./header.php";
?>
<html>
<div class="container mt-2">
    <h2>Agregar Nuevo Pais</h2>
    <div class="col">
        
        <div class="row">
        
            <table class="table table-success table-striped">
                <form action="./backend/agregar.php" method="POST">
                    <label for="nombre_pais">Pais</label>
                    <input type="text" name="nombrePais" id="nombrePais">
                    <br> <hr>
                    <label for="continenete">Continente</label>
                    <select name="continente" id="continente">
                        <option value="Europa">Europa</option>
                        <option value="Africa">Africa</option>
                        <option value="America">America</option>
                        <option value="Asia">Asia</option>
                        <option value="Oceania">Oceania</option>
                    </select>
                    <br> <hr>
                    <label for="bandera">Bandera</label>
                    <input type="text" name="bandera"  class="form-control" id="bandera">
                    <hr>
                    <button class="btn-primary">Agregar</button>
                    <hr>
                    <a href="./index.php" class="btn btn-danger">Regresar</a>
                </form>
            </table>

        </div>
    </div>

</div>
<html>

<?php include"./footer.php";?>
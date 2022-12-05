<?php include"./conexion.php";
include"./header.php";
$conexion =conexion();
// crear el qery de select
$sql = "SELECT * FROM t_paises";
$respuesta = mysqli_query($conexion,$sql);
?>
<div class="container mt-2" >
<h2>PAISES</h2>
<p>
    <a href="./agregar.php"><button class="btn-warning">Agregar Pais</button></a>
</p>
    <div class="col">
        <div class="col">
        <table class="table table-success table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Pais</th>
        <th>Continente</th>
        <th>Bandera</th>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody>
        <?php while( $ver=mysqli_fetch_array($respuesta)):?>
        <tr>
            <td> <?php echo $ver['id'];?></td>
            <td> <?php echo $ver ['nombrePais' ];?></td>
            <td> <?php echo $ver ['continente' ];?></td>
            <td> <img src="<?php echo $ver ['bandera' ];?>" alt="" width="100px"></td>
            <td> 
                <a href="./editar.php?idp=<?php echo $ver ['id']; ?>"><button class="btn btn-warning">Editar</button></a>
            </td>
            <td>
                <a href="./backend/eliminar.php?idp=<?php echo $ver ['id'];?>"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tr>
        <?php endwhile;?>

    </tbody>
</table>

        </div>
    </div>
</div> 

<?php include"./footer.php";?>
    

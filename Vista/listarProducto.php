<?php
session_start();
//Si la variable de sesión no está definida mandar al login
if(!isset($_SESSION['idRol'])){
    header("Location:index.php");
}
require_once('../Controlador/controladorProducto.php');
require_once('layoutSuperior.php');
?>
    <a href="../Controlador/controladorProducto.php?vista=registrarProducto.php" >Registrar</a>
    <h1 align="center">Productos</h1>
    <table border="1" align="center" id="myTable" class="display">
        <thead>
            <tr>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaProducto as $producto){
                    echo "<tr>";
                    echo "<td>".$producto['idProducto']."</td>";
                    echo "<td>".$producto['nombre']."</td>";
                    echo "<td>$".number_format($producto['precio'],2,",",".")."</td>";
                    echo "<td>
                    <form id='frmProducto$producto[idProducto]' method='POST' action='../Controlador/controladorProducto.php'>
                        <input type='hidden' name='idProducto' value=".$producto['idProducto']." />
                        <button type='submit' name='Editar'>Editar</button>
                        <button type='button' onclick='validarEliminacion($producto[idProducto])' name='Eliminar'>Eliminar</button>
                        <input type='hidden' name='Eliminar' />
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        //Declarar la función de javascript
        function validarEliminacion(idProducto){

            Swal.fire({
  title: '¿Realmente desea eliminar?',
  text: "Este cambio no se puede revertir",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, eliminar éste!',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Borrado!',
      'Su producto ha sido borrado.',
      'success'
    )
    document.getElementById('frmProducto'+idProducto).submit();
  }
});
            

        }

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

    </script>
<?php
require_once('layoutInferior.php');
?>
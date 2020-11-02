<?php

$mysqli = new mysqli("localhost", "damian", "ENTrZQDD7z4RDKk0","tpfinal");
$salida = "";
$query = "SELECT * FROM productos ORDER BY id";

if(isset($_POST['consulta'])){
     real_scape_string($_POST['consulta']);
     $query = "SELECT id, nombre_producto, precio_1, precio_2, precio_3 WHERE nombre_producto LIKE '%".$q."%' OR id LIKE '%".$q."%'";

}
$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0){
    $salida.="<form action='lista.php' method='POST'>
    <table class='tabla_datos'>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre Producto</td>
                    <td>Precio_1</td>
                    <td>Precio_2</td>
                    <td>Precio_3</td>
                </tr>
            </thead>
            <tbody>";
while($fila = $resultado->fetch_assoc()) {

    $salida.="<tr>
        <td>".$fila['id']."</td>
        <td>".$fila['nombre_producto']."</td>
        <td><button class='button_prueba'>Prueba</button>".$fila['precio_1']."</td>
        <td>".$fila['precio_2']."</td>
        <td>".$fila['precio_3']."</td>
        </tr>";
}

$salida.="</tbody></table></form>";
}else {
    $salida.="No hay datos";

}
echo $salida;
$mysqli->close();

?>

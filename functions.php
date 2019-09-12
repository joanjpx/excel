<?php
## Indicar el tipo de Cabecera para el Archivo XLS
header('Content-Type:application/xls');
header('Content-Disposition:attachment; filename=usuarios_excel.xls');

## Requerir Conexion
require_once("conexion.php");
$db = new DB();
$link = $db->Connect();

$query = "SELECT * FROM `traffic_sum` LIMIT 1000000";

$result = mysqli_query($link,$query);
?>

<table>
    <!--tr>
        <th>#</th>
        <th>Rol</th>
        <th>Usuario</th>
        <th>Nombre</th>
    </tr-->
    <?php
    while($row=mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[6];?></td>
        <td><?php echo $row[7];?></td>
        <td><?php echo $row[8];?></td>
        <td><?php echo $row[9];?></td>
        <td><?php echo $row[10];?></td>
    </tr>
    <?php
    }
    ?>
</table>
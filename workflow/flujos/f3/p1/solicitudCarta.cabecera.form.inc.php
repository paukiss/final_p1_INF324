<?php
$sql="select * from academico.alumno where id=".$_SESSION["IdUser"];
$resCab=mysqli_query($conn, $sql);
$filCab=mysqli_fetch_array($resCab);
$nombre=$filCab["nombre"];
$ci=$filCab["ci"];
$matricula=$filCab["matricula"];
// print_r($filCab);
?>
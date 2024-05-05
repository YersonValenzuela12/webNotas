<table border="1" width="50%">
<?php
$via[]=["Juan",12];
$via[]=["Luis",10];
$via[]=["Ana",14];
$via[]=["Pedro",8];
$via[]=["Marco",6];
$vec=array();
echo "lista de pasajeros <br>";
foreach($via as $k=>$d){
 echo "<tr><td>$d[0]<td>$d[1]";   
 $vec[]=$d[1];
}
//llenar un vector de asientos
    session_start();
    $_SESSION["asiento"]=$vec;
?>

</table>
<a href="pagingreso.php">Ingresar</a>

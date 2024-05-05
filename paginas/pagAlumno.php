
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
           include_once '../controlador/Negocio.php';
        $obj=new Negocio();
        $cod=$_GET["cod"];
        $nom=$_GET["nome"];
        $vec=$obj->lisAlumno($cod);
        ?>
        <h2>Lista de Alumnos de <?=$nom?></h2>
        <table class="table table-striped">
            <tr><th>codigo<th>Nombre y Apellido<th>foto<th>ver Pagos<th>ver Nota
            <?php
                    foreach ($vec as $k=>$d){
                        $nom="$d[1],$d[2]";
                       echo "<tr><td>$d[0]<td>$nom"; 
                     ?>
                <td><img src="../fOTOS/<?=$d[0]?>.jpg" height="90" width="90" 
                         onerror="src='../fotos/sin_foto.jpg'" class="rounded-circle">
                <td><a href="pagPago.php?cod=<?=$d[0]?>&nom=<?=$nom?>">Pagos</a>
                <td><a href="pagNota.php?cod=<?=$d[0]?>&nom=<?=$nom?>">Notas</a>
                    
                    <?php
                    }
            
            ?>
            
        </table>
        
    </body>
</html>

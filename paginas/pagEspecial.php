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
        $vec=$obj->lisEspe();
        ?>
        <h2>Lista de Especialidades</h2>
        <table class="table table-striped">
            <tr><th>Codigo<th>Nombre<th>ver Alumnos
             <?php
             foreach($vec as $k=>$d){
                 echo "<tr><td>$d[0]<td>$d[1]<td>";
               ?>
                    <a href="pagAlumno.php?cod=<?=$d[0]?>&nome=<?=$d[1]?>">ver</a>      
             <?php       
             }
             
             ?>
        </table>
    </body>
</html>

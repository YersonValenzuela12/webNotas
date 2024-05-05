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
        $vec=$obj->lisCurso();
        //para capturar el codigo seleccionado
        $cad="";
        if(isset($_REQUEST["cbc"])) //si ha seleccionado algo en el combo
            $cad=$_REQUEST["cbc"];
        ?>
        <label>Asignatura</label>
        <form>
            <select name="cbc" class="custom-select" onchange="submit()">
                <option>Elegir</option>
                <?php
                foreach($vec as $k=>$d){
               echo "<option value=$d[0]>$d[1]</option>";     
                }
                
                ?>
            </select>           
          </form>
        <table class="table table-striped">
            <tr><th>Coda<th>Nombre<th>Apellido<th>Especialidad<th>exp<th>exf<th>Promedio
             <?php
             $cap=0; $cds=0;
             $va=$obj->lisAluNota($cad);
             foreach ($va as $k=>$d){
                $pro=($d[4]+$d[5])/2;
                if($pro>=12)
                    $cap++;
                else
                    $cds++;
               echo "<tr><td>$d[0]<td>$d[1]<td>$d[2]<td>$d[3]<td>$d[4]<td>$d[5]<td>$pro";  
             }
             
             ?>
            <tr><td colspan="5">numero de aprobados<td><?=$cap?>
            <tr><td colspan="5">numero de desaprobados<td><?=$cds?>        
            
        </table>
        
        
    </body>
</html>

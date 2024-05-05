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
        //para capturar el codigo seleccionado
        $cad="";
        if(isset($_REQUEST["cbe"])) //si ha seleccionado algo en el combo
            $cad=$_REQUEST["cbe"];
        
        ?>
        <form >
        <label class="alert-info">Seleccione ESpecialidad</label>
        <select name="cbe" class="custom-select" onchange="submit()">
          <?php
                  foreach ($vec as $k=>$d){
                   echo "<option value=$d[0]>$d[1]</option>";  
                  }
          
          ?>
         </select>
          </form>
            <h2>Alumnos de la Especialidad</h2>
            <table class="table table-striped">
                <tr><th>Codigo<th>Apellido<th>Nombre
              <?php
               $va=$obj->lisAlumno($cad);
              foreach ($va as $k=>$d){
               echo "<tr><td>$d[0]<td>$d[1]<td>$d[2]";   
              }
              
              ?>
                
            </table>   
       
      
    </body>
</html>

<?php
session_start();
//print_r($asi);
function valida($n){
 $asi=$_SESSION["asiento"];   
 foreach ($asi as $d){
     if($d==$n) return true;
 }  
 return false;
}
?>
elegir asiento:<select name="cba">
    <?php
      for($a=1;$a<=40;$a++){
          if(valida($a)==false)
            echo "<option>$a</option>";
      }
    ?>
    
</select>
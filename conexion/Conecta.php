<?php

class Conecta {
 private $cn=null ;  
    function conecta(){
        if($this->cn==null){
            $this->cn= mysqli_connect("localhost","root","","bdnotas");
        }
        return $this->cn;
    }
}



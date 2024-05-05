<?php
include_once '../conexion/Conecta.php';
class Negocio {
  function lisEspe(){
     $cn=new Conecta();
     $sql="select idesp, nomesp from especialidad";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;
    }
    //lista cursos
    function lisCurso(){
     $cn=new Conecta();
     $sql="select idcurso, nomcurso from curso";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;
    }
    //lista de alumnos y notas de un curso
       function lisAluNota($cod){
     $cn=new Conecta();
     $sql="select a.idalumno,apealumno,nomalumno,nomesp,exaparcial, exafinal from "
             . " alumno a, especialidad e ,notas n where a.idesp=e.idesp  and  "
             . " n.idalumno=a.idalumno and idcurso='$cod' ";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;
    }
    
    
    
    
    function  lisAlumno($cod){
      $cn=new Conecta();
     $sql="select idalumno, nomalumno,apealumno from alumno where idesp='$cod' ";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;  
    }
    //lista de pagos pasando un codigo de alumno
     function  lisPago($cod){
      $cn=new Conecta();
     $sql="select ciclo, monto, fecha from pagos where idalumno='$cod'";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;  
    }
    //lista de notas de un alumno
       function  lisNota($cod){
      $cn=new Conecta();
     $sql="select c.idcurso, nomcurso,exaparcial, exafinal " .
         " from curso c,notas n where c.idcurso=n.idcurso and idalumno='$cod' ";
     $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
     $vec=array();
     while($fila= mysqli_fetch_array($res)){
             $vec[]=$fila;
     }
     return $vec;  
    }
}

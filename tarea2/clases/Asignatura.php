<?php
class Asignatura {
private int $id;
private string $nombre;
private string $creditos;
 
public function __construct($id,$nombre, $creditos){
    $this ->id=$id;
    $this->nombre=$nombre;
    $this->creditos=$creditos;
}
public function getId(){
    return $this->id;
}
 
public function getnombre(){
    return $this->nombre;
}
 
public function setnombre ($nombre){
$this->nombre=$nombre;
return $this;
}
 
public function getcreditos(){
    return $this->creditos;
}
 
public function setcreditos ($creditos){
$this->creditos=$creditos;
return $this;
}
 
public function __toString(){
    return "Nombre: $this->nombre, Creditos $this->creditos";
 
}
public static function crearAsignaturaDeMuestra(){
    $asignatura=[
            new Asignatura(1, "DWES", "7 créditos"),
            new Asignatura(2, "DWEC", "6 créditos"),
            new Asignatura(3, "DIW", "4 créditos"),
            new Asignatura(4, "DAW", "4 créditos"),
 
    ];
    return $asignatura;
}
 
}
?>
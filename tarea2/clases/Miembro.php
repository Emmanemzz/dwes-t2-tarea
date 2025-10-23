<?php
abstract class Miembro{
private int $id;
protected string $nombre;
protected string $apellidos;
protected string $email;
 
public function __construct($id, $nombre, $apellidos, $email){
$this->id=$id;
$this->nombre=$nombre;
$this->apellidos=$apellidos;
$this->email=$email;
}
public function getEmail(){
    return $this->email;
}
public function setEmail ($email){
$this->email=$email;
return $this;
}
 
public function getnombre(){
    return $this->nombre;
}
 
public function setnombre ($nombre){
$this->nombre=$nombre;
return $this;
}
 
public function getid(){
    return $this->id;
}
 
public function setid ($id){
$this->id=$id;
return $this;
}
 
public function getapellidos(){
    return $this->apellidos;
}
 
public function setapellidos ($apellidos){
$this->apellidos=$apellidos;
return $this;
}
 
public function __toString(){
    return $this->id." ".$this->nombre . " " . $this->apellidos . $this->email;
 
}
}
 
?>
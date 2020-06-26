<?php
class superHeroi{

private $id;
private $nome;
private $poderEspecial;
private $energia;
private $forca
private $origem

public function superHeroi($id, $nome, $poderEspecial,$energia,$forca,$origem) {
    $this->setNome($id);
    $this->setid($nome);
    $this->setPoder($poderEspecial);
    $this->setEnergia($energia);
    $this->setForca($forca);
    $this->setOrigem($origem);
}
public function getEnergia()
{
    return $this->energia;
}
public function setEnergia($energia)
{
    $this->energia = $energia;
}

public function getid()
{
    return $this->id;
}
public function setid($id)
{
    $this->id = $id;
}
public function getNome()
{
    return $this->nome;
}
public function setNome($nome)
{
    $this->nome = $nome;
}
public function setPoderEspecial($poderEspecial) 
{
   $this->poderEspecial = $poderEspecial;
}
public function getPoderEspecial($poderEspecial) 
{
   return $this->poderEspecial;
}

public function superHeroi() {

echo  "superHeroi\n";
}
public function getForca()
{
    return $this->$forca;
}
public function setForca($forca)
{
    $this->forca = $forca;
}
public function CalcularpoderMedio()
{
    return $this->($energia * $forca)/2;
}
public function aumentarEnergia()
{
    $this->$energia=  $energia * 11827260;
}
}
$Heroi1 = new SuperHeroi("6","Goku","super sayan","8000","10000","Paraiba");
$Heroi2 = new SuperHeroi("7","Harry Potter","Magia","4000","3500","Londrina");
$Heroi3 = new SuperHeroi("6","Curirin","Super Sayan","6000","9000","Maranhão");
$Heroi4 = new SuperHeroi("9","chuck noris"," Magia","7000","5000","Bahia");
?>



<?php

class togar
{
    public $nama; //variable global
    public $marga;
    public $status;

    public function __construct(String $nama = "togar", String $marga = "tzy", String $status = "Bapak", String $role = "murid")
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
        $this->role = $role;
    }

    public function getNama():String
    {
        return $this->nama;
    }
    
    public function getMarga():String
    {
        return $this->marga;
    }

    public function getStatus():String
    {
        return $this->status;
    }

    public function display():void
    {
        echo $this->judul(). "<br>"; //overloading
        echo "Nama : ". $this->getNama() . "<br>";
        echo "Marga : ". $this->getMarga() . "<br>";
        echo "Status : ". $this->getStatus();
    }
    
    public function judul():void
    {
        echo "ini dari class ". $this->getStatus();
    }

}

class Anak extends togar
{
    public $role;

    public function __construct(
        String $nama = "Stenly", String $marga = "tzy",
        String $status = "Anak", String $role = "Murid"
    )
    {
        // overriding 
        parent::__construct($nama, $marga, $status);
        $this->role = $role;
    }
    
    public function displayChild():void
    {
        echo parent::display();
        echo "<br>" . "Role  : ".$this->getRole();
    }
    
    public function getRole():String
    {
        return $this->role;
    }
}
// inisialisasi objek

$togar = new togar();

$anak1 = new Anak();
echo $togar->display();

echo "<hr>";
echo $anak1->displaychild();

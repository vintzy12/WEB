<?php
abstract class Product
{
    public $nama = "judul dari abstract";
    // syarat:
    // 1. memiliki atribute / properties harus public
    // 2. tidak memiliki contain body pada function
    // 3. memiliki fungsi yang bersifat abstract
    // 4. harus sama dengan class implementasinya

    abstract function judul(String $nama):void;
}

class Buku extends Product
{
    public $nama; //variale global

    public function __construct(String $nama = "moralandscape")
    {
        $this->nama = $nama;
    }
    
    public function getNama():String
    {
        return $this->nama;
    }
    public function judul(String $nama):void        
    {
        $this->$this->nama();
    }

    public function getJudul()
    {
        return $this->nama;
    }
}

$buku1 = new Buku();

echo $buku1->getJudul();
<?php

class ContohStatic
{
    public static $nama = ["Dendy", "Dedy", "Asep"];

    public static $index = 0; //variable global
   
   public static function all()
    {
     $index = 1; //variable local
    
     foreach(self::$nama as $na)
    {
         echo $index++ .".".$na . "<br>";
    }
 }

 public function display()
    {
        echo self::all();
    }
}

class SubStatic extends ContohStatic
{

}

$obj2 = new SubStatic();

echo $obj2->display();
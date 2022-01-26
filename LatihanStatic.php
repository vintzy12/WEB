<?php

class Bapak
{
    public static string $judul = "ini dari class Bapak";

    public static function getJudul():string
    {
        return static::$judul;
    }
}

class Anak extends Bapak
{
    public static string $judul = "ini dari class Anak";
}

echo Bapak::getJudul();
echo "<br>";
echo "<hr>";
echo Anak::getJudul();
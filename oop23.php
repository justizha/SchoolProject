<html>
    <h1 style="font-family: verdana;">Alfath Izha Barikallah</h1>
    <h1 style="font-family: verdana;">XI RPL</h1>
</html>


<?php

echo'<hr>';

class Animal {
    public $bulu0 ;
    public $bulu1 ;
    public $voice ;
    public $voice1 ;
    public $cat;
    public $dog;
    public function jenisHewan(){
        return " hewan : ".$this -> dog;
    }
    public function jenisHewan2(){
        return " hewan : <br>";
    }
}
class Dog extends Animal{
    public $bulu0 ;
    public $voice ;
    public $dog;
}
class JenisDog extends Dog{
    public $jenis0 ;
    public $jenis1 ;
}
class Cat extends Animal{
    public $bulu1 ;
    public $voice1 ;
    public $cat;
}
class Jeniskucing extends Cat{
   public $tipe;
   public $tipe1;
   public $tipe2;
}
$dg = new Dog();
$dg -> dog = " anjing <br>";
$dg -> bulu0 = "jenis bulu : kasar <br>";
$dg -> voice = "suara :  bark <br>";
echo $dg -> jenisHewan();
echo $dg -> bulu0;
echo $dg -> voice;
$gd = new JenisDog();
$gd -> jenis0 = "JermanShep <br>";
$gd -> jenis1 = "Bulldog <br>";
echo 'Contoh Jenis Anjing : <br>';
echo $gd-> jenis0;
echo $gd-> jenis1;

echo '<br>';
echo '<hr>';
echo '<br>';


$ct = new Cat();
$ct -> cat = "kucing <br> ";
$ct -> bulu1 = "jenis bulu : halus <br>";
$ct -> voice1 = "suara : meow <br>";
echo $ct -> jenisHewan2();
echo $ct -> bulu1;
echo $ct -> voice1;
$tc = new JenisKucing();
$tc -> tipe = "Persia <br>";
$tc -> tipe1 = "anggora <br>";
$tc -> tipe2 = "himalaya <br>";
echo 'Contoh jenis Kucing : <br>';
echo $tc -> tipe;
echo $tc -> tipe1;
echo $tc -> tipe2;


?>
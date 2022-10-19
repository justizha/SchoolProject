<html>
    <h1 style="font-family: arial ;">Alfath Izha Barikallah</h1>
</html>


<?php 
class Animal {
    public $bulu0 = "jenis bulu : kasar <br>";
    public $bulu1 = "jenis bulu : halus <br>";
    public $voice = "bentuk suara : menggonggong <br>";
    public $voice1 = "bentuk suara : mengeong <br>";
    public $hewan1 = "dog <br>";
    public $hewan2 = "cat <br>";

    public function jenisHewan(){
        return " jenis hewan :<br> ";
    }
}
class Dog extends Animal{
    
}
$dog1 = new Dog ();

echo "hewan : ", $dog1 ->hewan1;
echo $dog1 ->voice;
echo $dog1 ->bulu0;
echo $dog1 ->jenisHewan();

class JenisDog extends Dog{
    public $jenis1 = "jermanshep<br>";
    public $jenis2 = "bulldog <br>";
  
}
$doggo = new JenisDog();
echo $doggo-> jenis1;
echo $doggo-> jenis2;

echo"<br>";
echo"<hr>";
echo"<br>";

class Cat extends Animal{

}
$cat1 = new Cat();

echo "hewan : ",$cat1 -> hewan2; 
echo $cat1 -> voice1;
echo $cat1 -> bulu1;
echo $cat1 -> jenisHewan();

class Jeniskucing extends Cat{
    public $jenis1 = "persia <br>";
    public $jenis2 = "himalya <br>";
    public $jenis3 = "anggora <br>";
}
$kucing = new Jeniskucing();
echo $kucing-> jenis1;
echo $kucing-> jenis2;
echo $kucing-> jenis3;

?>
<?php



class Produk {
    public $merek;
    public $stok;
}
    class Televisi extends Produk{
        public $ukuran ;
        public $stok;
        public function cekMerek (){
            return "Merek tv :".$this -> merek;
        }
    }
    class Mesincuci extends Produk {
        public $kapasitas;
        public $stok;
        public function cekMerek (){
            return "Merek Mesin cuci :".$this -> merek;
        }
    }
    class Speaker extends Produk {
        public $volume;
        public $stok;
        public function cekMerek (){
            return "Merek speaker :".$this -> merek;
        }
    }
    $tv = new Televisi();
    $tv -> merek = "sharp <br>";
    $tv -> stok = "stok barang : 30 <br>";
    $tv -> ukuran ="ukuran : 16 X 10 <br>";
    echo $tv ->cekMerek();
    echo $tv ->stok;
    echo $tv ->ukuran;
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    $msc = new Mesincuci();
    $msc -> merek = "panasonic <br>";
    $msc -> stok = "stok barang : 40 <br>";
    $msc -> kapasitas = "kapasitaas : 10kg <br>";
    echo $msc ->cekMerek();
    echo $msc ->stok;
    echo $msc ->kapasitas;
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    $spk = new Speaker();
    $spk -> merek = "sony <br>";
    $spk -> stok = "stok barang : 35<br>";
    $spk -> volume = "jenis : bass";
    echo $spk -> cekMerek();
    echo $spk -> stok;
    echo $spk -> volume;
    
?>

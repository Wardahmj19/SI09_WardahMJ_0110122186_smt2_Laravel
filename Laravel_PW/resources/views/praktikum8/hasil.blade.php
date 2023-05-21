<?php

if(isset($_GET['submit'])){
    class input {
        public $nama, $tgl, $lhr, $umr, $jk, $gp, $wp, $td, $au, $kl, $gd;
    
        public function __construct($nama, $tgl, $lhr, $umr, $jk, $gp, $wp, $td, $au, $kl, $gd){
            $this->nama = $nama;
            $this->tgl = $tgl;
            $this->lhr = $lhr;
            $this->umr = $umr;
            $this->jk = $jk;
            $this->gp = $gp;
            $this->wp = $wp;
            $this->td = $td;
            $this->au = $au;
            $this->kl = $kl;
            $this->gd = $gd;
        }
    
        public function hitungtd(){
            if ($this->td == "120/80") {
                return "Normal";
                
            }else{
                return "Tidak Normal";
                
            }
        }
            
        public function hitungau(){
            if ($this->jk == "Laki-laki") {
                if ($this->au <= 7) {
                    return "Normal";
                } else{
                    return "Tidak Normal";
                }
            } elseif ($this->jk == "Perempuan") {
                if ($this->au <= 6) {
                    return "Normal";
                } else{
                    return "Tidak Normal";
                }
            }
        }

        public function hitungkl(){
            if ($this->kl <= 200) {
                return "Normal";
                
            }else{
                return "Tidak Normal";
                
            }
        }

        public function hitunggd(){
            if ($this->wp == "Waktu Puasa") {
                if ($this->gd >= 70 && $this->gd <= 110) {
                    return "Normal";
                } else {
                    return "Tidak Normal";
                }
            } elseif ($this->wp == "2 Jam Setelah Makan") {
                if ($this->gd >= 100 && $this->gd <= 150) {
                    return "Normal";
                } else{
                    return "Tidak Normal"; 
                }
            }
            elseif ($this->wp == "Waktu Acak") {
                if ($this->gd >= 70 && $this->gd <= 125) {
                    return "Normal";
                } else{
                    return "Tidak Normal"; 
                }
            }
        }
    }
    
    $input1 = new input($_GET['nama'], $_GET['tgl'], $_GET['lhr'], $_GET['umr'], $_GET['jk'], $_GET['gp'], $_GET['wp'], $_GET['td'], $_GET['au'], $_GET['kl'], $_GET['gd']);
}
    
    echo "<hr>";
    echo "<hr>";
    echo "<br>";
    echo "OUTPUT HASIL DATA PEMERIKSAAN";
    echo "<br>";
    echo "===============================";
    echo "<br>";
    echo "<br>";
    echo "Nama : $input1->nama";
    echo "<br>";
    echo "Tanggal Pemeriksaan : $input1->tgl";
    echo "<br>";
    echo "Tanggal Lahir : $input1->lhr";
    echo "<br>";
    echo "Umur : $input1->umr";
    echo "<br>";
    echo "Jenis Kelamin : $input1->jk";
    echo "<br>";
    echo "Gejala Penyakit : $input1->gp";
    echo "<br>";
    echo "Waktu Pemeriksaan : $input1->wp";
    echo "<br>";
    echo "Tekanan Darah : " . $input1->hitungtd();
    echo "<br>";
    echo "Asam Urat : " . $input1->hitungau();
    echo "<br>";
    echo "Kolestrol : " . $input1->hitungkl();
    echo "<br>";
    echo "Gula Darah : " . $input1->hitunggd();
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<hr>";

?>

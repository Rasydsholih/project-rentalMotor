<?php

class RentalMotor {
    protected $Diskon, $Pajak;
    private $Nmax, $Vesmet, $Aerox, $Zx25r;
    public $Nama, $Waktu, $Jenis;

    function __construct() {
        $this->Diskon = 0.05;
        $this->Pajak = 10000;
    }

    public function setHarga($motor1, $motor2, $motor3, $motor4) {
        $this->Nmax = $motor1;
        $this->Vesmet = $motor2;
        $this->Aerox = $motor3;
        $this->Zx25r = $motor4;
    }

    public function getHarga() {
        $motor['Nmax'] = $this->Nmax;
        $motor['Vesmet'] = $this->Vesmet;
        $motor['Aerox'] = $this->Aerox;
        $motor['Zx25r'] = $this->Zx25r;
        return $motor;
    }
}

class Rental extends RentalMotor {
    private $member =['rasyd','fikri','raka','edo'];

    public function HargaRental() {
        $DataRental = $this->getHarga();
        $HargaRental = $this->Waktu * $DataRental[$this->Jenis];
        $HargaPajak = $HargaRental + $this->Pajak;
        if (in_array($this->Nama,$this->member)){
        $HargaBayar = $HargaPajak - ($HargaPajak * $this->Diskon);
        } else {
            $HargaBayar = $HargaPajak;
        }
        return $HargaBayar;
    }

    public function CetakRental() {

        echo "<center>";
        if (in_array($this->Nama,$this->member)){
        echo " $this->Nama Berstatus sebagai Member mendapatkan diskon sebesar 5%<br>";
    }else {
        echo " $this->Nama Berstatus bukan member tidak mendapatkan diskon member <br>";
    }
        echo "Jenis motor yang dirental adalah " . $this->Jenis . " selama " . $this->Waktu . " Hari<br>";
        echo "Harga Rental perharinya: Rp." . $this->getHarga()[$this->Jenis] . "<br>";
        echo "Besar yang harus dibayar adalah Rp." . $this->HargaRental();
    }
}
?>



<!-- in_array fungsi nya untuk memeriksa suatu nilai yang ada di dalam array
jika nama tersebut ada didalam array maka akan menghasilkan true 
jika tidak ada maka menghasilkan false -->
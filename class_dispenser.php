<?php 
 class Dispenser{
    protected static $volumeGalon = 6000;
    protected static $hargaSegelas = 5000;
    private static $volumeGelas = 250;
    private static $penghasilan = 0;
    public $namaMinuman;
    public $namaPembeli;
    public $jumlahBeli;
    
    public function __construct($namaPembeli, $namaMinuman,$jumlahBeli){
        $this->jumlahBeli = $jumlahBeli;
        $this->namaPembeli =$namaPembeli;
        $this->namaMinuman =$namaMinuman;
    }

    public function getVolumeGalon(){
        $volumeGalon = self::$volumeGalon;
        return $volumeGalon;
    }

    public function getHargaSegelas(){
        $hargaSegelas = self::$hargaSegelas;
        return $hargaSegelas;
    }

    public function getVolumeGelas(){
        $volumeGelas = self::$volumeGelas;
        return $volumeGelas;
    }

    public function berkurang(){
            if (self::$volumeGalon != 0){
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $volumeGalon = self::$volumeGalon -= $total;
                return $volumeGalon;
            }elseif (self::$volumeGalon == 0) {
                self::$volumeGalon = 6000;
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $volumeGalon = self::$volumeGalon -= $total;
                return $volumeGalon;
            }
            
        }
            

    public function pembayaran(){
        return $this->jumlahBeli * self::$hargaSegelas; 
    }

    public function penghasilan(){
        $total = $this->jumlahBeli * self::$hargaSegelas;
        $jumlah = self::$penghasilan += $total;
        return $jumlah;
    }

    function format_uang($uang){
        $hasil = "Rp.".number_format($uang,0,",",".");
        return $hasil;
    }

 }
 ?> 

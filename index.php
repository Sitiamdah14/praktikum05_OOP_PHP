<?php
require_once 'class_dispenser.php';
$awal = new Dispenser("Tidak Ada","Cappucino",0);
echo "Nama Minuman : ".$awal->namaMinuman;
echo "<br/>Volume Awal Galon ".$awal->namaMinuman." Adalah ".$awal->getVolumeGalon()." L";
echo "<br/>Volume Segelas ".$awal->namaMinuman." Adalah ".$awal->getVolumeGelas()." ml";
echo "<br/>Harga Segelas ".$awal->namaMinuman." Adalah ".$awal->format_uang($awal->getHargaSegelas());

$pembeli1 = new Dispenser("Ara","Cappucino",14);
echo "<br/><br/>".$pembeli1->namaPembeli." membeli ".$pembeli1->jumlahBeli." ".$pembeli1->namaMinuman;
echo "<br/> Sisa volume pada galon ".$pembeli1->namaMinuman." sekarang adalah ".$pembeli1->berkurang()." L";
echo "<br/>Total Pembayarannya : ".$pembeli1->format_uang($pembeli1->pembayaran());
echo "<br/>Total Penghasilan  ".$pembeli1->namaMinuman." : ".$pembeli1->format_uang($pembeli1->penghasilan()); 

$pembeli2 = new Dispenser("Imel","Cappucino",10);
echo "<br/><br/>".$pembeli2->namaPembeli." membeli ".$pembeli2->jumlahBeli." ".$pembeli2->namaMinuman;
echo "<br/> Sisa volume pada galon ".$pembeli2->namaMinuman." sekarang adalah ".$pembeli2->berkurang()." L";
echo "<br/>Total Pembayarannya : ".$pembeli2->format_uang($pembeli2->pembayaran());
echo "<br/>Total Penghasilan ".$pembeli2->namaMinuman." : ".$pembeli2->format_uang($pembeli2->penghasilan()); 

$pembeli3 = new Dispenser("Amdah","Cappucino",2);
echo "<br/><br/>".$pembeli3->namaPembeli." membeli ".$pembeli3->jumlahBeli." ".$pembeli3->namaMinuman;
echo "<br/> Sisa volume pada galon ".$pembeli3->namaMinuman." sekarang adalah ".$pembeli3->berkurang()." L";
echo "<br/>Total Pembayarannya : ".$pembeli3->format_uang($pembeli3->pembayaran());
echo "<br/>Total Penghasilan  ".$pembeli3->namaMinuman." : ".$pembeli3->format_uang($pembeli3->penghasilan());

?>

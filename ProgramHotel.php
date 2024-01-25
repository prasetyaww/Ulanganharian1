<?php

function programHotel($nama, $noWa, $alamat, $tipeKamar, $harga, $lamaMenginap, $diskon, $hari,  ){
    echo "=== Program Reservasi Hotel Sederhana === <br />";
    echo "Nama Pemesan : $nama <br />";
    echo "Nomor WhatsApp : $noWa <br />";
    echo "Alamat : $alamat <br />";

    if($tipeKamar == "Deluxe"){
        $hargaDeluxe = 200000;
        $hargaMenginap = $hargaDeluxe * $hari;

        if($lamaMenginap > $hari){
            $totalHarga = $hargaMenginap *50/100;
        }else{
            
        }
    }else

    if($tipeKamar == "Superior"){
        $hargaSuperior = 400000;
        $hargaMenginap = $hargaSuperior * $hari;

        if($lamaMenginap > $hari){
            $totalHarga = $hargaMenginap *35/100;
        }else{

        }
    }else

    if($tipeKamar == "premium"){
        $hargaPremium = 800000;
        $hargaMenginap = $hargaPremium * $hari;

        if($lamaMenginap > $hari){
            $totalHarga = $hargaMenginap *25/100;
        }else{
            
        }
    }else


    if($status == "Waiting"){
        echo "Status : <span style = 'color : yellow'> $status </span>";
    }else if($status == "Checkin"){
        echo "Status : <span style = 'color : green'> $status </span>";
    }else if($status == "Checkout"){
        echo "Status : <span style = 'color : red'> $status </span>";
    }
}
echo programHotel("Cempaka", "0819 2653 7984", "Jl. Abdul Muis No. 44", 4);

?>
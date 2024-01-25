<?php

function noAbsen($noAbsen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($noAbsen; $noAbsen <= $kondisiTerminasi; $noAbsen++){
        if($noAbsen == $kt1 || $noAbsen == $kt2 || $noAbsen == $kt3){
            echo "Peserta didik no absen $noAbsen tidak hadir <br />";
        }else if($noAbsen == $kt4 || $noAbsen == $kt5){
            echo "Peserta didik no absen $noAbsen terlambat <br />";
        }else if($noAbsen == $kt6 || $noAbsen == $kt7){
            echo "Peserta didik no absen $noAbsen sakit <br />";
        }else{
            echo "Peserta didik no absen $noAbsen hadir <br />";
        }
    }
}
echo noAbsen(1, 15, 2, 3, 10, 6, 8, 9, 13);
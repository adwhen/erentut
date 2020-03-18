<?php 

    function posisi($posisi){
        if($posisi == 1){
            return 'Jaksa';
        }elseif($posisi == 2){
            return 'Kasi';
        }elseif($posisi == 3){
            return 'Kajari';
        }elseif($posisi == 4){
            return 'Aspidum';
        }elseif($posisi == 5){
            return 'Kajati/Wakajati';
        }elseif($posisi == 6){
            return 'Sudah disetujui';
        }
    }

    function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
    }

?>
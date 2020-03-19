<?php 

    function posisi($posisi){
        if($posisi == 1){
            return 'Jaksa Penuntut Umum';
        }elseif($posisi == 2){
            return 'Kepala Seksi Tindak Pidana Umum';
        }elseif($posisi == 3){
            return 'Kepala Kejaksaan Negeri';
        }elseif($posisi == 4){
            return 'Asisten Tindak Pidana Umum Kejaksaan Tinggi';
        }elseif($posisi == 5){
            return 'Kepala Kejaksaan Tinggi';
        }elseif($posisi == 6){
            return 'Sudah disetujui';
        }
    }

    function lokasi($instansi){
        if(strcasecmp('KEJAKSAAN TINGGI BENGKULU', $instansi) == 0 || strcasecmp('KEJAKSAAN NEGERI BENGKULU', $instansi) == 0){
            return 'Bengkulu';
        }elseif(strcasecmp('KEJAKSAAN NEGERI BENGKULU UTARA', $instansi) == 0){
            return 'Bengkulu Utara';
        }elseif(strcasecmp('KEJAKSAAN NEGERI BENGKULU SELATAN', $instansi) == 0){
            return 'Bengkulu Selatan';
        }elseif(strcasecmp('KEJAKSAAN NEGERI BENGKULU TENGAH', $instansi) == 0){
            return 'Bengkulu Tengah';
        }elseif(strcasecmp('KEJAKSAAN NEGERI MUKO-MUKO', $instansi) == 0){
            return 'Muko-Muko';
        }elseif(strcasecmp('KEJAKSAAN NEGERI KAUR', $instansi) == 0){
            return 'Kaur';
        }elseif(strcasecmp('KEJAKSAAN NEGERI SELUMA', $instansi) == 0){
            return 'Seluma';
        }elseif(strcasecmp('KEJAKSAAN NEGERI REJANG LEBONG', $instansi) == 0){
            return 'Rejang Lebong';
        }elseif(strcasecmp('KEJAKSAAN NEGERI LEBONG', $instansi) == 0){
            return 'Lebong';
        }elseif(strcasecmp('KEJAKSAAN NEGERI KEPAHIANG', $instansi) == 0){
            return 'Kepahiang';
        }
    }

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split = explode('-', $tanggal);
    
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }

    function umur($tanggal){
        $today = date("Y-m-d");
        $diff = date_diff(date_create($tanggal), date_create($today));
        $umur = $diff->format('%y');
        return $umur;
    }

    function hari_indo($tanggal){
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );
        $namahari = date('l', strtotime($tanggal));

        echo $daftar_hari[$namahari];
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
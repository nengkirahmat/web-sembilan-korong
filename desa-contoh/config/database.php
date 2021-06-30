<?php
// -------------------------------------------------------------------------
// Gunakan file ini di folder desa-contoh sebagai contoh untuk di folder desa.
//
// Di folder desa, ikuti ketentuan berikut:
// Konfigurasi database dalam file ini menggantikan konfigurasi di file asli
// SID di donjo-app/config/database.php.
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = '192.168.14.251';
$db['default']['username'] = 'web_sembiko';
$db['default']['password'] = 'aRr98skAkQ';
$db['default']['database'] = 'web_sembiko';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/ 
$db['default']['stricton'] = TRUE;
?>
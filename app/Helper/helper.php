<?php

// mendapatkan nama aplikasi dari file env
function get_app_name()
{
    return env('APP_NAME');
}

// Menampilkan gambar
function getImageFile($file)
{
    if ($file != '') {
        return asset('storage/img/' . $file);
    } else {
        return asset('assets/img/logo-keygold.png');
    }
}

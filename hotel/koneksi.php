<?php

$koneksi = mysqli_connect("localhost","root","","web_hotel")

if(! $koneksi){
    echo "Koneksi tampilan gagal: " . mysqli_connect_error();
}

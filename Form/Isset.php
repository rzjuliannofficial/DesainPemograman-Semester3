<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
}else {
    echo "Anda belum dewasa atau variable 'umur' tidak ditemukan.";
} 
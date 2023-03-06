<?php

use GuwaPhp\Guwa;

require_once("./vendor/autoload.php");

$_ENV['GUWA_API_KEY'] = "Nw.mbLd7cJ5dLSA_twSdmF-T6ozYlLSgfTxv8cn9OwTplozSChQ-D2JxHK-9Rhx";

$res = Guwa::send([
    "recipients" => [
        "6287763484064"
    ],
    "text" => "Masukkan kode *3645* untuk memverifikasi akun GuruPRO anda"
]);

print_r($res);
<?php

    /*
        Variable System
        variable built in PHP
    */
echo $_SERVER["DOCUMENT_ROOT"];


    /*
        Variable User
        variable yang dibuat oleh user
    */
    echo '<br><br>';
    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    $name = 'Akmal';

    echo "Nama saya adalah $name";




    /*
        Variable konstan
        variabel yang tidak bisa diubah nilainya
        1.  Menggunakan define()    | define('fruit, 'Apel');
        2. Menggunakan const        | const fruit = "Apel';
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>
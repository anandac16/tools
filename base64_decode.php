<?php

    function readline($pesan){
        echo $pesan;
        $answer =  rtrim( fgets( STDIN ));
        return $answer;
    }

    $word = readline("Base64 Encode: ");
    echo"Result: \n";
    echo base64_decode($word);
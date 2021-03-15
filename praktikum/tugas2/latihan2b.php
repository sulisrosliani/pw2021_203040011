<?php

    $jawabanIsset = "Isset adalah = Fungsi isset pada PHP adalah Fungsi isset () digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. 
    Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty adalah = Untuk memeriksa apakah sebuah objek form telah diisi atau tidak, kita bisa menggunakan fungsi: empty(). Fungsi empty() akan menghasilkan nilai false jika sebuah variabel telah diisi, 
    lai true jika variabel tersebut belum diisi.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>
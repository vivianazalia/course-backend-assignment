<?php
    $servername = "localhost";      //server yang kita gunakan adalah localhost
    $username = "root";             //username default adalah root. gunakan user lain yang disetting jika ada
    $password = "";                 //password default adalah kosong. gunakan password yang disetting jika ada
    $dbname = "course_backend_db";  //kita terhubung dengan basisdata yang sudah kita buat sebelumnya yaitu course_backend_db

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());    //jika gagal, maka koneksi akan dihentikan
    }
?>
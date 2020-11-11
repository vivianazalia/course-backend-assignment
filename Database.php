<?php
    //buat class database dan fungsinya agar dapat digunakan sebagai object

    class Database
    {
        function execute($query)       //fungsi execute digunakan untuk menjalankan query dan mengembalikan status berhasil atau gagal dari query tersebut
        {
            include("database_connect.php");

            if (mysqli_query($conn, $query)) {
                mysqli_close($conn);

                return true;
            }

            mysqli_close($conn);

            return false;
        }

        function get($query)       //function get digunakan untuk menjalankan query dan mengembalikan data dari query jika berhasil dan null jika gagal
        {
            include("database_connect.php");

            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                $conn->close();

                return $result;
            }

            $conn->close();

            return null;
        }

        //fungsi get procedure execute digunakan untuk menjalankan procedure dan mengembalikan status berhasil atau gagal dari query tersebut
        function get_procedure_execute($procedure) 
        {
            include("database_connect.php");

            return mysqli_query($conn, "CALL ".$procedure);
        }
    }
    
?>
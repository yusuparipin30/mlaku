<?php
  //Fungsi connect() / mysqli_connect() digunakan untuk membuka koneksi baru ke server MySQL.

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) 
    values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";


    //Fungsi mysql_query dalam PHP adalah untuk menjalankan perintah atau instruksi query ke database MySQL/
    //dimana mysql_query() merupakan sarana dasar yang akan menampung jenis query apapun di dalam nya. 
    //Jenis query tersebut yang dapat dijalankan di mysql_query() antara lain adalah INSERT, SELECT, UPDATE, dan DELETE atau dalam bahasa standar fitur sebuah program dikenal dengan istilah CRUD. Fungsi mysql_query dapat juga dikatakan sebagai fungsi untuk menampung sebuah perintah atau intruksi ke database MySQL baik dalam PHP atau bahasa pemrograman lain.
    mysqli_query($connection, $request);

    header('location:book.php');
}else{
    echo 'something went wrong try again';
}
?>

<?php
    $server = 'localhost:3308';
    $user = 'root';
    $password = '';
    $database = 'db_elektronik';

    $koneksi = mysqli_connect($server, $user, $password, $database) or die (mysqli_error($koneksi));
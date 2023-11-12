<?php

include "koneksi.php";

if (isset($_POST['bsimpan'])){
     
    //penyimpanan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO elektronik (id, nama_barang, brand, harga)
                                        VALUES ('$_POST[tid]',
                                                '$_POST[tbarang]',
                                                '$_POST[tbrand]',
                                                '$_POST[tharga]') ");

    //jika simpan sukses
    if($simpan){
        echo "<script>alert('Simpan data Sukses ! ')
            document.location='index.php'
            </script>";
    }else{
        echo "<script>alert('Simpan data Gagal ! ')
            document.location='index.php'
            </script>";
    }
                                      
}

if (isset($_POST['bubah'])){
     
    //mengubah data
    $ubah = mysqli_query($koneksi, "UPDATE elektronik SET
                            id = '$_POST[tid]',
                            nama_barang = '$_POST[tbarang]',
                            brand = '$_POST[tbrand]',
                            harga = '$_POST[tharga]' 
                            WHERE id_elektronik = '$_POST[id_elektronik]'
                            ");

    //jika ubah sukses
    if($ubah){
        echo "<script>alert('Ubah data Sukses ! ')
            document.location='index.php'
            </script>";
    }else{
        echo "<script>alert('Ubah data Gagal ! ')
            document.location='index.php'
            </script>";
    }
                                      
}


//jika tombol hapus
if (isset($_POST['bhapus'])){
     
    //penghapusan data
    $hapus = mysqli_query($koneksi, "DELETE FROM elektronik WHERE id_elektronik = '$_POST[id_elektronik]' ");

    //jika hapus sukses
    if($hapus){
        echo "<script>alert('Hapus data Sukses ! ')
            document.location='index.php'
            </script>";
    }else{
        echo "<script>alert('Hapus data Gagal ! ')
            document.location='index.php'
            </script>";
    }
                                      
}

<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $sql = "INSERT INTO tb_jurusan(nama_jurusan) VALUES ('$jurusan')";
    $query = mysqli_query($conn, $sql);

    $sql ="SELECT max (id_jurusan)AS jur FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $sql = "INSERT INTO tb_spp(tahun, nominal) VALUES ('$tahun'.'$nominal')";
    $query = mysqli_query($conn, $sql);
    
    $sql = "SELECT max(id_jurusan)AS jur FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $jur = $data['jur'];

    $sql = "SELECT max(id_spp)AS spp FROM tb_spp LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $spp = $data['spp'];

    $sql = "INSERT INTO tb_siswa(nama, kelas, id_jurusan,id_spp) VALUES ('$nama','$kelas','$jur','$spp')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location:join_table.php?status=sukses');
    }else{
        header('Location:join_table.php?status=gagal');
    }}
?>
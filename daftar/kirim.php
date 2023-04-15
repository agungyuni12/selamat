<?php
include '../setting/config.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$kecamatan = $_POST['kecamatan'];
$desa = $_POST['desa'];
$alamat = $_POST['alamat'];

$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$simitra = $_POST['simitra'];

$siap_bertugas = $_POST['siap_bertugas'];
$desa_kerja = $_POST['desa_kerja'];


$nama_ktp = $_FILES['foto_ktp']['name'];
$ext_ktp = pathinfo($nama_ktp, PATHINFO_EXTENSION);
$foto_ktp = $nik.'_'.$nama.'_ktp'.'.'.$ext_ktp;
$lokasi_ktp = '../image/ktp/'.$foto_ktp;

$nama_ss = $_FILES['ss_posting']['name'];
$ext_ss = pathinfo($nama_ss, PATHINFO_EXTENSION);
$foto_ss = $nik.'_'.$nama.'_ss_posting'.'.'.$ext_ss;
$lokasi_ss = '../image/ssposting/'.$foto_ss;


move_uploaded_file($_FILES['foto_ktp']['tmp_name'],$lokasi_ktp); 
move_uploaded_file($_FILES['ss_posting']['tmp_name'],$lokasi_ss);

        
mysqli_query($conn,"INSERT INTO daftar (nik,nama,jk,kecamatan,desa,alamat,tanggal_lahir,umur,pendidikan,pekerjaan,simitra,siap_bertugas,desa_kerja,foto_ktp,ss_posting) VALUES ('$nik','$nama','$jk','$kecamatan','$desa','$alamat','$tanggal_lahir','$umur','$pendidikan','$pekerjaan','$simitra','$siap_bertugas','$desa_kerja','$foto_ktp','$foto_ss')");
?>
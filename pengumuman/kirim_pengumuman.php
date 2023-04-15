<?php
include '../setting/config.php';

$nik2 = isset($_POST['nik2']) ? $_POST['nik2'] : '';
$kabupaten4 = isset($_POST['kabupaten4']) ? $_POST['kabupaten4'] : '';
$kabupaten5 = preg_replace("/[^a-zA-Z0-9]/", "", $kabupaten4);
$nama_survey3 = isset($_POST['nama_survey3']) ? $_POST['nama_survey3'] : '';
$tahapan3 = isset($_POST['tahapan3']) ? $_POST['tahapan3'] : '';

$nomor = $_POST['nomor'];
$cek1 = $_POST['cek1'];
$cek2 = $_POST['cek2'];

$nama_ijazah = $_FILES['ijazah']['name'];
$ext_ijazah = pathinfo($nama_ijazah, PATHINFO_EXTENSION);
$foto_ijazah = $nik2.'_ijazah'.'.'.$ext_ijazah;
$lokasi_ijazah = '../image/ijazah/'.$foto_ijazah;


move_uploaded_file($_FILES['ijazah']['tmp_name'],$lokasi_ijazah);


                if ($cek1 == 'ya') {
                      mysqli_query($conn,"UPDATE $kabupaten5 SET nomor = '$nomor', setuju = '$cek1' WHERE nik='$nik2' AND nama_survei = '$nama_survey3' AND tahapan = '$tahapan3'");
                  } else if ($cek2 == 'tidak') {
                      mysqli_query($conn,"UPDATE $kabupaten5 SET nomor = '$nomor', setuju = '$cek2' WHERE nik='$nik2' AND nama_survei = '$nama_survey3' AND tahapan = '$tahapan3'");
                  }
        
mysqli_query($conn,"INSERT INTO daftar (nik,nama,jk,kecamatan,desa,alamat,tanggal_lahir,umur,pendidikan,pekerjaan,simitra,siap_bertugas,desa_kerja,foto_ktp,ss_posting) VALUES ('$nik','$nama','$jk','$kecamatan','$desa','$alamat','$tanggal_lahir','$umur','$pendidikan','$pekerjaan','$simitra','$siap_bertugas','$desa_kerja','$foto_ktp','$foto_ss')");
?>
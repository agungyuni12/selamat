<?php
include '../setting/config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

// Load file autoload.php
require '../vendor/autoload.php';
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
$kabupaten = isset($_POST['kabupaten']) ? $_POST['kabupaten'] : '';
$nama_survey = isset($_POST['nama_survey']) ? $_POST['nama_survey'] : '';
$tahapan = isset($_POST['tahapan']) ? $_POST['tahapan'] : '';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PORTAL PENGUMUMAN</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <script src="../vendor/jquery/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();
        });
    </script>
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php $page='import'; include '../menu/navbar.php' ;?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>IMPORT PENGUMUMAN</h1>
            <span class="d-none">Dapat menambahkan pengumuman mitra</span>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>FORM IMPORT PENGUMUMAN</em></h2>
              <span class="d-none">interdum nisl ac urna tempor mollis</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form method="post" action="form.php" enctype="multipart/form-data">
                <div class="row">
                      <input type="hidden" name="kabupaten2" id="kabupaten2" value="<?= $kabupaten ;?>">
                      <input type="hidden" name="nama_survey2" id="nama_survey2" value="<?= $nama_survey ;?>">
                      <input type="hidden" name="tahapan2" id="tahapan2" value="<?= $tahapan ;?>">
                  <div class="col-lg-12">
                    <fieldset>
                                <input type="file" name="file" class="form-control">
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset>
                        <a class="border-button" href="Format.xlsx">DOWNLOAD</a>
                        <span class="text-white">CONTOH FORMAT EXCEL</span>
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset>
                        <button type="submit" name="preview" class="border-button">PREVIEW</button>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 mt-3">
                    <fieldset>
                        <span class="text-white">catatan: status diisi utama atau cadangan atau tidaklulus</span> 
                    </fieldset>
                  </div>
                </div>
              </form>
              <hr>

                        <?php
                  // Jika user telah mengklik tombol Preview
                  if (isset($_POST['preview'])) {
                      $tgl_sekarang = date('YmdHis'); // Ini akan mengambil waktu sekarang dengan format yyyymmddHHiiss
                      $nama_file_baru = 'data' . $tgl_sekarang . '.xlsx';

                      // Cek apakah terdapat file data.xlsx pada folder tmp
                      if (is_file('../tmp/' . $nama_file_baru)) // Jika file tersebut ada
                          unlink('../tmp/' . $nama_file_baru); // Hapus file tersebut

                      $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
                      $tmp_file = $_FILES['file']['tmp_name'];

                      // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
                      if ($ext == "xlsx") {
                          // Upload file yang dipilih ke folder tmp
                          // dan rename file tersebut menjadi data{tglsekarang}.xlsx
                          // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
                          // Contoh nama file setelah di rename : data20210814192500.xlsx
                          move_uploaded_file($tmp_file, '../tmp/' . $nama_file_baru);

                          $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                          $spreadsheet = $reader->load('../tmp/' . $nama_file_baru); // Load file yang tadi diupload ke folder tmp
                          $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                          // Buat sebuah tag form untuk proses import data ke database
                          echo "<form method='post' action='import.php'>";
                          $kabupaten2 = isset($_POST['kabupaten2']) ? $_POST['kabupaten2'] : '';
                          $nama_survey2 = isset($_POST['nama_survey2']) ? $_POST['nama_survey2'] : '';
                          $tahapan2 = isset($_POST['tahapan2']) ? $_POST['tahapan2'] : '';

                          ?>
                              <input type="hidden" name="kabupaten3" id="kabupaten3" value="<?= $kabupaten2 ;?>">
                              <input type="hidden" name="nama_survey3" id="nama_survey3" value="<?= $nama_survey2 ;?>">
                              <input type="hidden" name="tahapan3" id="tahapan3" value="<?= $tahapan2 ;?>">
                          <?php

                          // Disini kita buat input type hidden yg isinya adalah nama file excel yg diupload
                          // ini tujuannya agar ketika import, kita memilih file yang tepat (sesuai yg diupload)
                          echo "<input type='hidden' name='namafile' value='" . $nama_file_baru . "'>";

                          // Buat sebuah div untuk alert validasi kosong
                          echo "<div id='kosong' class='alert alert-danger'>
                    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                          </div>";

                          echo "<div class='table-responsive text-white'>
                              <table class='table table-bordered'>
                                  <tr>
                                      <th colspan='8' class='text-left'>PREVIEW DATA</th>
                                  </tr>
                                  <tr>
                                      <th>No</th>
                                      <th>NIK</th>
                                      <th>Nama</th>
                                      <th>Wilayah Tugas</th>
                                      <th>Posisi</th>
                                      <th>Status</th>
                                      <th>Nomor</th>
                                      <th>Setuju</th>
                                  </tr>";

                                  $numrow = 1;
                                  $kosong = 0;
                                  foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                                      // Ambil data pada excel sesuai Kolom
                                      $nik = $row['A']; // Ambil data NIK
                                      $nama = $row['B']; // Ambil data nama
                                      $wiltug = $row['C']; // Ambil data jenik kelamin
                                      $posisi = $row['D']; // Ambil data telepon
                                      $status = $row['E']; // Ambil data status
                                      $nomor = $row['F']; // Ambil data status
                                      $setuju = $row['G']; // Ambil data status

                                      // Cek jika semua data tidak diisi
                                      if ($nik == "" && $nama == "" && $wiltug == "" && $posisi == "" && $status == "" && $nomor == "" && $setuju == "")
                                          continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                                      // Cek $numrow apakah lebih dari 1
                                      // Artinya karena baris pertama adalah nama-nama kolom
                                      // Jadi dilewat saja, tidak usah diimport
                                      if ($numrow > 1) {
                                          // Validasi apakah semua data telah diisi
                                          $nik_td = (!empty($nik)) ? "" : " style='background: #E07171;'"; // Jika nik kosong, beri warna merah
                                          $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                                          $wiltug_td = (!empty($wiltug)) ? "" : " style='background: #E07171;'"; // Jika Jenik Kelamin kosong, beri warna merah
                                          $posisi_td = (!empty($posisi)) ? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
                                          $status_td = (!empty($status)) ? "" : " style='background: #E07171;'"; // Jika status kosong, beri warna merah

                                          // Jika salah satu data ada yang kosong
                                          if ($nik == "" or $nama == "" or $wiltug == "" or $posisi == "" or $status == "") {
                                              $kosong++; // Tambah 1 variabel $kosong
                                          }

                                          echo "<tr>";
                                          echo "<td>" . ($numrow-1) . "</td>";
                                          echo "<td" . $nik_td . ">" . $nik . "</td>";
                                          echo "<td" . $nama_td . ">" . $nama . "</td>";
                                          echo "<td" . $wiltug_td . ">" . $wiltug . "</td>";
                                          echo "<td" . $posisi_td . ">" . $posisi . "</td>";
                                          echo "<td" . $status_td . ">" . $status . "</td>";
                                          echo "<td>" . $nomor . "</td>";
                                          echo "<td>" . $setuju . "</td>";
                                          echo "</tr>";
                                      }

                                      $numrow++; // Tambah 1 setiap kali looping
                                  }

                          echo "</table></div>";

                          // Cek apakah variabel kosong lebih dari 0
                          // Jika lebih dari 0, berarti ada data yang masih kosong
                          if ($kosong > 0) {
                  ?>
                          <script>
                              $(document).ready(function() {
                                  // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                                  $("#kosong").show(); // Munculkan alert validasi kosong
                              });
                          </script>
                  <?php
                          } else { // Jika semua data sudah diisi
                              echo "<hr style='margin-top: 0;'>";
                              // Buat sebuah tombol untuk mengimport data ke database
                              echo "<button type='submit' name='import' class='border-button'>IMPORT</button>";
                          }

                          echo "</form>";
                      } else { // Jika file yang diupload bukan File Excel 2007 (.xlsx)
                          // Munculkan pesan validasi
                          echo "<div class='alert alert-danger'>
                    Hanya File Excel 2007 (.xlsx) yang diperbolehkan
                          </div>";
                      }
                  }
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>our solid background on finance</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                    <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                    <a href="" class="filled-button">Read More</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="../assets/images/about-image.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>TIM KAMI</em></h2>
              <span class="d-none">Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-item">
              <img src="../assets/images/team_01.jpg" alt="">
              <div class="down-content">
                <h4>Agung Yuniarta Sosiawan, S.Tr.Stat.</h4>
                <span>STAFF FUNGSI PRODUKSI</span>
                <p class="d-none">In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-item">
              <img src="../assets/images/team_02.jpg" alt="">
              <div class="down-content">
                <h4>Adlan Felardhi, S.Tr.Stat.</h4>
                <span>STAFF FUNGSI IPDS</span>
                <p class="d-none">In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none">
            <div class="team-item">
              <img src="../assets/images/team_03.jpg" alt="">
              <div class="down-content">
                <h4>Paul Walker</h4>
                <span>Financial Analyst</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content d-none">
              <span>Lorem ipsum dolor sit amet</span>
              <h2>Our solutions for your <em>business growth</em></h2>
              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6 align-self-center d-none">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">945</div>
                  <div class="count-title">Work Hours</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title">Great Reviews</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title">Projects Done</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include '../menu/footer.php' ;?>

    <!-- Bootstrap core JavaScript -->

    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
<?php
include '../setting/config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
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
            <span>Dapat menambahkan pengumuman mitra</span>
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
                              <?php
                  // Load file koneksi.php
                  include "../setting/config.php";
                  $kabupaten3 = isset($_POST['kabupaten3']) ? $_POST['kabupaten3'] : '';
                  $kabupaten_lanjut = preg_replace("/[^a-zA-Z0-9]/", "", $kabupaten3);
                  $nama_survey3 = isset($_POST['nama_survey3']) ? $_POST['nama_survey3'] : '';
                  $tahapan3 = isset($_POST['tahapan3']) ? $_POST['tahapan3'] : '';
                  // Load file autoload.php
                  require '../vendor/autoload.php';

                  // Include librari PhpSpreadsheet
                  use PhpOffice\PhpSpreadsheet\Spreadsheet;
                  use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

                  if(isset($_POST['import'])){ // Jika user mengklik tombol Import
                    $sql = 'CREATE TABLE IF NOT EXISTS '.$kabupaten_lanjut.'(
                          `nik` VARCHAR(33) NOT NULL,
                          `nama` VARCHAR(50) NOT NULL,
                          `wiltug` VARCHAR(30) NOT NULL,
                          `posisi` VARCHAR(50) NOT NULL,
                          `status` VARCHAR(10) NOT NULL,
                          `nomor` VARCHAR(20) NOT NULL,
                          `setuju` VARCHAR(10) NOT NULL,
                          `nama_survei` VARCHAR(200) NOT NULL,
                          `tahapan` VARCHAR(100) NOT NULL
                      )';	
                      if ($conn->query($sql) === TRUE) {
                        echo "Table MyGuests created successfully";
                      } else {
                        echo "Error creating table: " . $conn->error;
                      }
                    $nama_file_baru = $_POST['namafile'];
                      $path = '../tmp/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

                      $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                      $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
                      $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                    $numrow = 1;
                    foreach($sheet as $row){
                      // Ambil data pada excel sesuai Kolom
                      $nik = $row['A']; // Ambil data NIK
                      $nama = $row['B']; // Ambil data nama
                      $wiltug = $row['C']; // Ambil data jenis kelamin
                      $posisi = $row['D']; // Ambil data telepon
                      $status = $row['E']; // Ambil data alamat
                      $nomor = $row['F']; // Ambil data alamat
                      $setuju = $row['G']; // Ambil data alamat

                      // Cek jika semua data tidak diisi
                      if($nik == "" && $nama == "" && $wiltug == "" && $posisi == "" && $status == "" && $nomor == "" && $setuju == "")
                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                      // Cek $numrow apakah lebih dari 1
                      // Artinya karena baris pertama adalah nama-nama kolom
                      // Jadi dilewat saja, tidak usah diimport
                      if($numrow > 1){
                        // Buat query Insert
                        $query = "INSERT INTO ".$kabupaten_lanjut." VALUES('" . $nik . "','" . $nama . "','" . $wiltug . "','" . $posisi . "','" . $status . "','" . $nomor . "','" . $setuju . "','" . $nama_survey3 . "','" . $tahapan3 . "')";

                        // Eksekusi $query
                        mysqli_query($conn, $query);
                      }

                      $numrow++; // Tambah 1 setiap kali looping
                    }

                      unlink($path); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
                      ?>
                          <script>
                            Swal.fire({
                            icon:"success",
                            title: 'Data Imported',
                            text: 'Data Telah Berhasil Diimport',
                            showCancelButton: false ,
                            confirmButtonColor: 'green',
                            confirmButtonText: 'OK',
                            }).then(function() {
                            window.location = "index.php";
                            });
                          </script>
                      <?php
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
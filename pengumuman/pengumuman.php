<?php
  include '../setting/config.php';
  $nik = isset($_POST['nik']) ? $_POST['nik'] : '';
  $kabupaten2 = isset($_POST['kabupaten2']) ? $_POST['kabupaten2'] : '';
  $kabupaten3 = preg_replace("/[^a-zA-Z0-9]/", "", $kabupaten2);
  $nama_survey2 = isset($_POST['nama_survey2']) ? $_POST['nama_survey2'] : '';
  $tahapan2 = isset($_POST['tahapan2']) ? $_POST['tahapan2'] : '';
  clearstatcache();
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
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css">
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
    <?php $page='pengumuman'; include '../menu/navbar.php' ;?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Pengumuman Mitra <?=$nama_survey2.' Tahap '.$tahapan2 ;?></h1>
            <h1><?=$kabupaten2 ;?></h1>
            <span class="d-none"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12 d-none">
            <div class="section-heading">
              <h2 class=""><em>PENGUMUMAN</em></h2>
              <span class="d-none">interdum nisl ac urna tempor mollis</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form method="post" action="kirim_pengumuman.php" id="pengumuman" enctype="multipart/form-data">
              <input type="hidden" id="nik2" name="nik2" value="<?= $nik;?>" />
              <input type="hidden" id="kabupaten4" name="kabupaten4" value="<?= $kabupaten2;?>" />
              <input type="hidden" id="nama_survey3" name="nama_survey3" value="<?= $nama_survey2;?>" />
              <input type="hidden" id="tahapan3" name="tahapan3" value="<?= $tahapan2;?>" />

                <?php
                  $sql1 = mysqli_query($conn,"SELECT * FROM $kabupaten3 where nik = '$nik' AND nama_survei = '$nama_survey2' AND tahapan = '$tahapan2'");
                  $row1 = mysqli_fetch_array($sql1);
                  $nama=isset($row1['nama']) ? $row1['nama'] : '';
                  $nik1=isset($row1['nik']) ? $row1['nik'] : '';
                  $status=isset($row1['status']) ? $row1['status'] : '';
                  $wiltug=isset($row1['wiltug']) ? $row1['wiltug'] : '';
                  $posisi=isset($row1['posisi']) ? $row1['posisi'] : '';
                  $id=isset($row1['id']) ? $row1['id'] : '';
                    if($status == "utama"){
                        if($posisi == "Belum ditentukan, antara Gel 2 - 4 (Lengkapnya cek Surat)"){
                  ?>
                <div class="row">
                    <div class="col-lg-12 alert alert-warning">
                      <fieldset>
                      <h1 class="alert-heading">Pengumuman untuk Pelatihan Petugas Gelombang 2-4 akan disampaikan sehari sebelum pelatihan:</h1>
                      <br><h3>Gelombang 2, 29 Sept - 01 Okt 2022</h3>
                      <h3>Gelombang 3, 02 - 04 Okt 2022</h3>
                      <h3>Gelombang 4, 04 - 06 Okt 2022</h3>
                      <h3>Gelombang 5, 09 - 11 Okt 2022</h3>
                      <br><h2>Harap tetap mengecek kembali pengumuman H-2 tiap gelombang</h2>
                      <br><h5>Mohon maaf atas ketidaknyamanannya. Kalembo Ade</h5>
                      </fieldset>
                    </div>
                  <?php
                        }
                        else{
                  ?>
                  <div class="row">
                    <div class="col-lg-12 alert alert-success">
                      <fieldset>
                      <h1 class="alert-heading">Selamat <?= $nama ;?> <br>Anda dinyatakan Lulus Anda dinyatakan Lulus Sebagai Calon Petugas Pendataan Lengkap Sensus Pertanian Tahun 2023!</h1>
                      <br> <h1>Anda ditugaskan sebagai <?= $posisi;?> Kecamatan <?=$wiltug;?>!</h1>
                      <br><h5>Silahkan Mengisikan Nomor HP yang dapat dihubungi (Nomor yg ada WA lebih utama).</h5>
                      </fieldset>
                    </div>
                      <div class="col-lg-12 mt-4">
                        <fieldset>
                          <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor HP Yang Dapat Dihubungi terdapat WA"/>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                        <br><p class="lead mb-4 text-white"><b>Konfirmasi kesiapan mengikuti Pelatihan</b></p>
                        </fieldset>
                      </div>
                      <div class="col text-white">
                        <fieldset>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cek1" name="cek1" value="ya">
                            <label class="custom-control-label" for="cek1">Ya</label>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col mb-5 text-white">
                        <fieldset>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cek2" namfe="cek2" value="tidak">
                            <label class="custom-control-label" for="cek2">Tidak</label>
                          </div>
                        </fieldset>
                      </div>
                      <div style = "display:none;" class="col-lg-12 text-left">
                      <fieldset>
                        <h5 style = "display:none;" class="text-white">Upload File Ijazah Terakhir</h5>
                        <input type="file" class="form-control" id="ijazah" name="ijazah"/>
                      </fieldset>
                    </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" class="border-button" name="kirim">KIRIM</button>
                        </fieldset>
                      </div>
                     </div>
                  <?php
                        }
                  } else if ($status == "cadangan") {
                    ?>
                      <div class="row">
                        <div class="col-lg-12 alert alert-warning">
                          <fieldset>
                          <h2 class="alert-heading">Halo <?= $nama ;?> Anda dinyatakan Lulus Sebagai Cadangan Calon Petugas Pendataan Lengkap Sensus Pertanian Tahun 2023!</h2>
                          </fieldset>
                        </div>
                          <div class="col-lg-12 mt-4">
                            <fieldset>
                              <input type="hidden" class="form-control" id="nomor2" name="nomor2" placeholder="Nomor HP Yang Dapat DiHubungi" required />
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <h3>Jika Anda siap ditempatkan di Kecamatan Pekat silakan konfirmasi kesiapan pada link berikut Sampai dengan <b>31 Maret 2023 Jam 13.00 WITA</b> : <a href = "https://forms.gle/FszfxcsRLPUoZ1v79">KLIK DISINI</a></h3>
                            </fieldset>
                          </div>
                      </div>
                    <?php
                  } else {
                    ?>
                      <div class="row">
                        <div class="col-lg-12 alert alert-danger">
                          <fieldset>
                          <h2 class="alert-heading">Maaf <?= $nama ;?> Anda dinyatakan Tidak Lolos.</h2>
                          <h5>Terima kasih atas partisipasinya.<br>Perhatian untuk tetap mengingat username dan password simitra agar dapat mengikuti survei BPS lainnya.</h5>
                          </fieldset>
                        </div>
                      </div>
                    <?php
                  }
                  ?>
              </form>
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/accordions.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.js"></script>

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
    
    
    <script>
      $(document).ready(function(){
        $('#pengumuman').on('submit',function(e){
          e.preventDefault();
          var nomor = $("#nomor").val();
          var cek1 = $("#cek1").val();
          var cek2 = $("#cek2").val();
          var ijazah = $("#ijazah").val();
          if (nomor =="") {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Nomor tidak boleh kosong",
              })
          } else if ($("#cek1").prop('checked') == false && $("#cek2").prop('checked') == false) {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Kesediaan tidak boleh kosong",
              })
          } else {
              $.ajax({
              url:"kirim_pengumuman.php",
              method:"POST",
              data:new FormData(this),
              contentType:false,
              processData:false,
            }).done(function(resp) {
              Swal.fire({
                  icon:"success",
                  title:"Berhasil ",
                  text:"Data berhasil disimpan",
              }).then(function() {
		window.location = "../index.php";
		});
            }) 
          }
        });
      });
    </script>


  </body>
</html>
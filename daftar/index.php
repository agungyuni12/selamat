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
    <?php $page='daftar'; include '../menu/navbar.php' ;?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>PENDAFTARAN</h1>
            <span>Pendaftaran petugas Survei dan Sensus BPS</span>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="coantainer">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>FORM PENDAFTARAN</em></h2>
              <span class="d-none">interdum nisl ac urna tempor mollis</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form method="post" action="kirim.php" id="daftar" enctype="multipart/form-data">
                <div id="hal1">
                  <div class="row">
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12 mb-4">
                      <fieldset>
                        <select class="form-select form-control" aria-label="Default select example" id="jk" name="jk">
                          <option selected value="">Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-12 mb-4">
                      <fieldset>
                        <select class="form-select form-control" aria-label="Default select example" id="kecamatan" name="kecamatan">
                          <option selected value="">Asal Kecamatan</option>
                          <option value="Huu">Huu</option>
                          <option value="Pajo">Pajo</option>
                          <option value="Dompu">Dompu</option>
                          <option value="Woja">Woja</option>
                          <option value="Manggelewa">Manggelewa</option>
                          <option value="Kilo">Kilo</option>
                          <option value="Kempo">Kempo</option>
                          <option value="Pekat">Pekat</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Asal Desa" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap Sesuai KTP/Surat Domisili" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="button" id="next1" name="next1" class="border-button">NEXT</button>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div id="hal2" style="display: none ;">
                  <div class="row">
                    <div class="col-lg-12 text-left">
                      <fieldset>
                        <h5 class = "text-white">Tanggal Lahir</h5>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan terakhir yang ditamatkan" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan saat ini" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12 mb-4">
                      <fieldset>
                        <select class="form-select form-control" aria-label="Default select example" id="simitra" name="simitra">
                          <option selected value="">Apakah sudah memiliki akun di web mitra.bps.go.id</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="button" id="back" name="back" class="border-button">BACK</button>
                        <button type="button" id="next2" name="next2" class="border-button">NEXT</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
                
                <div id="hal3" style="display: none ;">
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                      <fieldset>
                        <select class="form-select form-control" aria-label="Default select example" id="siap_bertugas" name="siap_bertugas">
                          <option selected value="">Siap bertugas di lintas desa domisili</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-12 text-left">
                      <fieldset>
                        <span class="text-white">Hasil akhir bisa saja berbeda dengan yang anda pilih, ini hanya menjadi referensi kami dalam melihat persebaran petugas nantinya</span>
                        <input type="text" class="form-control" id="desa_kerja" name="desa_kerja" placeholder="Desa pilihan tempat tugas jika dinyatakan lulus" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12 text-left">
                      <fieldset>
                        <h5 class="text-white">FOTO KTP</h5>
                        <input type="file" class="form-control" id="foto_ktp" name="foto_ktp"/>
                      </fieldset>
                    </div>
                    <div class="col-lg-12 text-left">
                      <fieldset>
                        <h5 class="text-white">Berkas File SS sudah menshare postingan</h5>
                        <input type="file" class="form-control" id="ss_posting" name="ss_posting"/>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="button" id="back2" name="back2" class="border-button">BACK</button>
                        <button type="submit" id="kirim" name="kirim" class="border-button">KIRIM</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
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

    <script>
      document.querySelector('#next1').addEventListener('click',function(e){
          e.preventDefault();
          var nik = $("#nik").val();
          var nama = $("#nama").val();
          var jk = $("#jk").val();
          var kecamatan = $("#kecamatan").val();
          var desa = $("#desa").val();
          var alamat = $("#alamat").val();
          if (nik==""){
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"NIK tidak boleh kosong",
            })
          } else if (nik.length != 16) {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"NIK harus 16 digit",
            })
          } else if (nama=="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Nama tidak boleh kosong",
            })
          } else if (jk=="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Jenis Kelamin tidak boleh kosong",
            })
          } else if (kecamatan=="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Kecamatan tidak boleh kosong",
            })
          } else if (desa=="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Desa tidak boleh kosong",
            })
          } else if (alamat=="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Alamat tidak boleh kosong",
            })
          } else {
            document.getElementById("hal2").style.display = 'block';
            document.getElementById("hal1").style.display = 'none';
            document.getElementById("hal3").style.display = 'none';
          }
      });
      document.querySelector('#back').addEventListener('click',function(e){
          e.preventDefault();
            document.getElementById("hal1").style.display = 'block';
            document.getElementById("hal2").style.display = 'none';
            document.getElementById("hal3").style.display = 'none';
      });
      document.querySelector('#next2').addEventListener('click',function(e){
          e.preventDefault();
          var tanggal_lahir = $("#tanggal_lahir").val();
          var umur = $("#umur").val();
          var pendidikan = $("#pendidikan").val();
          var pekerjaan = $("#pekerjaan").val();
          var simitra = $("#simitra").val();
          if (tanggal_lahir == "") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Tanggal Lahir tidak boleh kosong",
            })
          } else if (umur == "") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Umur tidak boleh kosong",
            })
          } else if (pendidikan =="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Pendidikan tidak boleh kosong",
            })
          } else if (pekerjaan =="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Pekerjaan tidak boleh kosong",
            })
          } else if (simitra =="") {
            Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Simitra tidak boleh kosong",
            })
          } else {
          document.getElementById("hal3").style.display = 'block';
          document.getElementById("hal1").style.display = 'none';
          document.getElementById("hal2").style.display = 'none';
          }
      });
      document.querySelector('#back2').addEventListener('click',function(e){
          e.preventDefault();
          document.getElementById("hal2").style.display = 'block';
          document.getElementById("hal1").style.display = 'none';
          document.getElementById("hal3").style.display = 'none';
      });
    </script>
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
        $('#daftar').on('submit',function(e){
          e.preventDefault();
          var siap_bertugas = $("#siap_bertugas").val();
          var desa_kerja = $("#desa_kerja").val();
          var foto_ktp = $("#foto_ktp").val();
          var ss_posting = $("#ss_posting").val();
          if (siap_bertugas =="") {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Kesiapan tidak boleh kosong",
              })
          } else if (desa_kerja =="") {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Desa tempat bekerja tidak boleh kosong",
              })
          } else if (foto_ktp =="") {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Foto KTP tidak boleh kosong",
              })
          } else if (ss_posting =="") {
              Swal.fire({
                icon:"error",
                title:"Gagal",
                text:"Foto Kendaraan tidak boleh kosong",
              })
          } else {
              $.ajax({
              url:"kirim.php",
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
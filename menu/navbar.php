<?php
if ($page == 'home' || $page == 'about') {
  include "setting/config.php";
} else {
  include "../setting/config.php";
}


error_reporting(0);
 
session_start();

?>

<div class="sub-header d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>PORTAL PENGUMUMAN</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if($page=='home'){echo "active" ;} ?>">
                <a class="nav-link" href="<?php if($page=='pengumuman' || $page=='import' || $page=='daftar' || $page=='login'){echo '../'; }?>index.php">HOME
                <?php if($page=='home'){ ?><span class="sr-only">(current)</span> <?php } ?>
                </a>
              </li>
              <li class="nav-item <?php if($page=='about'){echo "active" ;} ?>">
                <?php if($page=='about'){ ?><span class="sr-only">(current)</span> <?php } ?>
                <a class="nav-link" href="<?php if($page=='pengumuman' || $page=='import' || $page=='daftar' || $page=='login'){echo '../'; }?>about.php">TENTANG KAMI</a>
              </li>  
              <li class="nav-item <?php if($page=='pengumuman'){echo "active" ;} ?>">
                <?php if($page=='pengumuman'){ ?><span class="sr-only">(current)</span> <?php } ?>
                <a class="nav-link" href="<?php if($page == 'home' || $page == 'about') {echo 'pengumuman/' ;} else if($page == 'import' || $page == 'daftar' || $page=='login') {echo '../pengumuman/';} ?>index.php">LIHAT PENGUMUMAN</a>
              </li>                          
              <li id="tambah" style="display: none;" class="nav-item <?php if($page=='import'){echo "active" ;} ?>">
                <?php if($page=='import'){ ?><span class="sr-only">(current)</span> <?php } ?>
                <a  class="nav-link" href="<?php if($page == 'home' || $page == 'about') {echo 'import/' ;} else if($page == 'pengumuman' || $page == 'daftar' || $page=='login') {echo '../import/';} ?>index.php">TAMBAH PENGUMUMAN</a>
              </li>
              <li id= "daftar" style="display: none;" class="nav-item <?php if($page=='daftar'){echo "active" ;} ?>">
                <?php if($page=='daftar'){ ?><span class="sr-only">(current)</span> <?php } ?>
                <a  class="nav-link" href="<?php if($page == 'home' || $page == 'about') {echo 'daftar/' ;} else if($page == 'pengumuman' || $page == 'import' || $page=='login') {echo '../daftar/';} ?>index.php">DAFTAR</a>
              </li>
              <li id= "masuk" style="display: none;" class="nav-item <?php if($page=='login'){echo "active" ;} ?>">
                <?php if($page=='login'){ ?><span class="sr-only">(current)</span> <?php } ?>
                <a  class="nav-link" href="<?php if($page == 'home' || $page == 'about') {echo 'login/' ;} else if($page == 'pengumuman' || $page == 'import' || $page=='daftar') {echo '../login/';} ?>index.php">LOGIN</a>
              </li>
              <li id="keluar" style="display: none;" class="nav-item">
                <a class="nav-link" href="<?php if($page == 'home' || $page == 'about') {echo 'login/' ;} else if($page == 'pengumuman' || $page == 'import' || $page=='daftar') {echo '../login/';} ?>logout.php">LOGOUT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script>
      var $username = '<?= $_SESSION['username'];?>';
      if ($username == "") {
        document.querySelector('#masuk').style.display="block";
        document.querySelector('#daftar').style.display="block";
      } else {
        document.querySelector('#keluar').style.display="block";
        document.querySelector('#tambah').style.display="block";
      }
    </script>
    </header>
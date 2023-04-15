<html lang="en">
<?php
$nama = $_GET['nama'];
$nik = $_GET['nik'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Tahap 2 Regsosek</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css">
</head>



<body> 

  <div id="timer"><a class="fa fa-book"></a> Tes Tahap 2 Regsosek || Waktu Tersisa  <a class="fa fa-clock-o"></a> <span id="time"></span></div>

<span id="form">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe96v9DzxGjbojntDmV2mtu1BxOLYaCez_tWkJ_UYpDwtxxXw/viewform?usp=pp_url&entry.557726029=<?=$nik;?>&entry.1993869954=<?=$nama;?>">Tunggu yaa</iframe><br />
</span>

<script>

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var batas = timer + 60*1 ;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds + " Menit";

        if (--timer < 0) {

           document.getElementById("timer").innerHTML = "Waktu habis";
        }
    if (--batas < 0) {

           document.getElementById("form").style.visibility = "hidden";
           document.getElementById("timer").style.visibility = "hidden";
        }

    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 60,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);

};

</script>

<style type="text/css">
  
body {
    overflow: visible;
}

iframe {

height: 800px;
width: 100%;
border: 0px;
padding-top: 8px;
margin: 0px
}

#timer {
background-color: #000000;
color: #FFFFFF;
font-family: arial;
font-weight: bold;
padding: 10px 30px;
border-radius: 1px;
}

</style>

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


</body>
</html>
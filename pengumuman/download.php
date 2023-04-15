<?php
$filename="undangan.pdf";

$url_download = BASE_URL . RELATIVE_PATH . $filename;

header("Content-type:application/pdf");
header("Content-Disposition:inline;filename='$filename");
readfile("undangan.pdf");

?>
<?php


echo 'check mail for source code';
$url = $_GET['url'];
echo '<a href='.$url.'> Visit your page</a>';
  $file1 = '../cv/cv_files/file1.jpg';
  unlink($file1);
file_put_contents("../cv1/home.html", "");

 ?>

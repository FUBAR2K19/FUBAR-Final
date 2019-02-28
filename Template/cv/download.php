<?php


echo '<a href="cons.zip" download>download source code</a>';
$url = $_GET['url'];
echo '<a href='.$url.'> Visit your page</a>';
  $file1 = '../cv/cv_files/file1.jpg';
  unlink($file1);
file_put_contents("../constructive1/home.html", "");

 ?>

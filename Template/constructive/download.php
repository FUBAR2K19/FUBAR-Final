<?php


echo '<a href="cons.zip" download>download source code</a>';
$url = $_GET['url'];
echo '<a href='.$url.'download> Visit your page</a>';
  $file1 = '../constructive1/img/file1.jpg';
  $file2 = '../constructive1/img/file2.jpg';
  $file3 = '../constructive1/img/file3.jpg';
  $file4 = '../constructive1/img/file4.jpg';
  $file5 = '../constructive1/img/file5.jpg';
  $file6 = '../constructive1/img/file6.jpg';
  $file7 = '../constructive1/img/file7.jpg';
  $file8 = '../constructive1/img/file8.jpg';
  $file9 = '../constructive1/img/file9.jpg';
  unlink($file1);
  unlink($file2);
  unlink($file3);
  unlink($file4);
  unlink($file5);
  unlink($file6);
  unlink($file7);
  unlink($file8);
  unlink($file9);

file_put_contents("../constructive1/home.html", "");

 ?>

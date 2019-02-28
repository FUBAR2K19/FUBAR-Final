<?php


  echo 'check your mail';
  $file1 = '../dark portfolio1/dark portfolio_files/file1.jpg';
  $file2 = '../dark portfolio1/dark portfolio_files/file2.jpg';
  $file3 = '../dark portfolio1/dark portfolio_files/file3.jpg';
  $file4 = '../dark portfolio1/dark portfolio_files/file4.jpg';
  $file5 = '../dark portfolio1/dark portfolio_files/file5.jpg';
  $file6 = '../dark portfolio1/dark portfolio_files/file6.jpg';
  $file7 = '../dark portfolio1/dark portfolio_files/file7.jpg';
  $file8 = '../dark portfolio1/dark portfolio_files/file8.jpg';
  unlink($file1);
  unlink($file2);
  unlink($file3);
  unlink($file4);
  unlink($file5);
  unlink($file6);
  unlink($file7);
  unlink($file8);
  $filem = "dark.zip";
  unlink($filem);
file_put_contents("../dark portfolio1/home.html", "");

 ?>

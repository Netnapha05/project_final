<?php
  $conn = mysqli_connect("localhost","root","","users");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>

<?php 
  $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

  $insert_t = "INSERT INTO trends(title, number) VALUES ('{$_GET['title']}', '{$_GET['number']}')";

  $result_t = mysqli_query($connect, $insert_t);

  ob_start();
   $new_url = 'index.php';
   header('location:' .$new_url);
   ob_end_flush();
?>
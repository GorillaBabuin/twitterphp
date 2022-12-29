<?php 
 $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

 $delete = "DELETE FROM trends WHERE id = {$_GET['id']}";

 $query_delete = mysqli_query($connect, $delete);

 ob_start();
  $new_url = 'index.php';
  header('location:' .$new_url);
  ob_end_flush();
?>
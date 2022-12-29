ob_start();
  $new_url = 'index2.php';
  header('location:' .$new_url);
  ob_end_flush();
<?php 
 $con = mysqli_connect('127.0.0.1','root', '', 'twitter');
 if ($con == false) {
   echo "не подключено";
 } else{
   echo "подключено";
 }

 $select = "UPDATE tweets SET name='{$_GET['name']}', text='{$_GET['text']}' WHERE id='{$_GET['id']}'";
 $results = mysqli_query($con, $select);

  $new_url = 'index.php';
  //header('location:' .$new_url);
?>
<?php
   $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
   if ($connect== false) {
    	  echo "не подключено";
    } else{
    	  echo "подключено";
    }

   $delete = 'DELETE FROM contacts WHERE id = ""';

   $query_delete = mysqli_query($connect, $delete);




?>
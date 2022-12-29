<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php 
  $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

?>
<body>
  <div style="height: 900px;" class="bg-light col-12 row">
  	 <div style="height: 900px;" class="col-6 bg-info">
  	 	 <img style="margin-left: 350px; margin-top: 275px; " class="col-4" src="img2/logo.png">
  	 </div>
  	 <div style="height: 900px; " class="col-6">
  	   <img style="margin-top: 200px; " class="col-1" src="img2/logo2.png">
  	   <h2 style="margin-top: 10px;">Создайте учетную запись</h2>
       <form action="index2.php" method="GET">
  	    <div style="margin-top: 20px;" class="col-4">
  	     <input placeholder="Имя" type="text" name="login"  class="w-10 form-control bg-light text-dark">
  	    </div>
  	    <div style="margin-top: 20px;" class="col-4">
  	     <input placeholder="Номер телефона" type="number" name="tnumber"  class="w-10 form-control bg-light text-dark">
  	    </div>
        <button style="margin-top: 20px" class="rounded-pill btn btn-primary w-40 py-2">зарегистрироваться</button>
       </form>
     </div>
       
  </div>
<?
  $insert_login = "INSERT INTO login(profilename, number) VALUES ('{$_GET['login']}', '{$_GET['tnumber']}')";

  $result_login = mysqli_query($connect, $insert_login);
?>
  <div>
  	<h6>О нас Справочный центр Условия предоставления услуг Политика конфиденциальности Политика в отношении файлов cookie Информация о рекламе Блог Статус Работа Ресурсы бренда Реклама Маркетинг Твиттер для бизнеса Разработчикам Каталог Настройки © Twitter, Inc., 2021.</h6>
  </div>
  <script type="text/javascript">
    alert("aaaaa")
  </script>
</body>
</html>
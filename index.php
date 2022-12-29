<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<?php
	  //1 это айпи, 2 имя, 3 пароль, 4 название базы данных.
    $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
    if ($connect== false) {
    	  echo "не подключено";
    } else{
    	  echo "подключено";
    }
    $text_query = 'SELECT * FROM tweets';
    $query = mysqli_query($connect, $text_query);

    if ($query==false) {
    	 echo " Запрос не работает";
    }else{
    	echo " запрос работает";
    }


    

   	

   	$select_trends = "SELECT * FROM trends";
		$result_trends = mysqli_query($connect, $select_trends);

		$trend1 = mysqli_fetch_assoc($result_trends);
		$trend2 = mysqli_fetch_assoc($result_trends);
		$trend3 = mysqli_fetch_assoc($result_trends);
		$trend4 = mysqli_fetch_assoc($result_trends);
		$trend5 = mysqli_fetch_assoc($result_trends);
	?>
</head>
<body class="">												
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> 
				<div class="col-3">
					<div class="mt-3">
						<h4 class="fw-normal">Главная</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Обзор</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Уведомления</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Сообщения</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Закладки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Списки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Профиль</h4>
					</div>
					<div class="mt-4">
						<button class="rounded-pill btn btn-primary w-75 py-2">Твитнуть</button>
					</div>
					
				</div>

				<!-- Средняя колонка -->
				<div class="col-6 border-end border-start">
				  <form action="deletetweet.php" method="GET">
				  	<input type="text" name="id" placeholder="найдите айди твита" class="form-control">
				  	<button class="btn bg-danger mt-2">удалить</button>
				  </form>
				  
					<!--Добавить твит форма-->
					<div class="pt-2 bg-white">						
						<div class="row">							
							<div class="col-1">
								<img src="img/1.jpg" class="rounded-circle">
							</div>							
							<div class="col-10">
								<div class="col-12">
									<form action="insert.php" method="GET">
									<input value="img/1.jpg" name="avatar" hidden></input>
									<input type="text" name="autor" class="form-control " placeholder="Автор">
									<textarea name="maintext" class="form-control mt-2" placeholder="Что нового?"></textarea>
									<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>
									</form>
									<div class="col-6 border-end border-start mt-2">
				           <form action="updatetweet.php" method="GET">
				  	        <input type="text" name="id" placeholder="айди" class="form-control">
				  	        <input type="text" name="text" placeholder="текст твита" class="form-control">
				  	        <input type="text" name="name" placeholder="название твита" class="form-control">
				  	        <button class="btn bg-danger mt-2">редактировать</button>
				           </form>
								</div>								
							</div>
						</div>				
							
					</div>
                    <?php 
                      $tweet1 = [
                         "name"=> "bebra",
                         "text"=> "bebra kushala",
                         "avatar"=> "img/1.jpg",
                         "image"=> "img/1.jpg",
                      ]
                    ?>
					<!--Вывод постов тут-->
					<div style="margin-top: 10px;" class="row border">
						<div class="col-2">
							<img class="rounded-circle" src="<?php echo $_GET['avatar']; ?>" >
						</div>
						<div class="col-10">
							<h5><?php echo $_GET['autor'] ?></h5>
							<?php echo $_GET['maintext'] ?>
						</div>
					</div>

         <?php
					for ($i=0; $i < $query->num_rows; $i++) { 
    	     $result = $query->fetch_assoc();
          
         ?>

					<div style="margin-top: 10px;" class="row border mt-2 py-3">
						<div class="col-2">
							<img class="rounded-circle w-75" src="<?php echo $result['avatar']; ?>" >
						</div>
						<div class="col-10">
							<h5><?php echo $result['name']; ?></h5>
							<p><?php echo $result['text']; ?></p>
							<img class="rounded w-100 col-5" src="<?php echo $result['image']; ?>" >
						</div>
						<form action="deletetweet.php" method="GET">
				  	 <input hidden value="<?php echo $result['id']; ?>" type="text" name="id" class="form-control">
				  	 <button class="btn bg-danger mt-2 ">удалить</button>
				    </form>
				    	<button class="change btn bg-info col-2 mt-2">редакт</button>
				     <form style="display: none;" class="form" action="updatetweet.php" method="GET">
				  	  <input type="text" name="id" placeholder="айди" class="form-control">
				  	  <input type="text" name="text" placeholder="текст твита" class="form-control">
				  	  <input type="text" name="name" placeholder="название твита" class="form-control">
				  	  <button class=" btn bg-danger mt-2">редактировать</button>
				     </form>
					</div>

				
        <?php } ?>
				</div>

				<!--Правая колонка-->
				<div class="col-3 bg-light">
					<form action="insert3.php" method="GET">
									<input type="text" name="title" class="form-control " placeholder="Новая тема">
									<input type="number" name="number" class="form-control " placeholder="число смотрителей">
									<button type="submit" class="btn btn-primary mt-2"></button>
					</form>
					<h5>Актуальные темы для вас</h5>
					<div>
						<h6><?php echo $trend['title']; ?></h6>
						<p><?php echo $trend['number']; ?></p>
				  </div>

				</div>
			</div>
		</div>
	</div>
  <script type="text/javascript">
  	let form = document.querySelectorAll('.form');
  	let change = document.querySelectorAll('.change');

  	for (let i=0; i<change.length; i++) {
  		change[i].onclick = function(){
       form[i].style.display = "block";
       console.log("1");
  	  }
  	}

  	
  </script>
</body>
</html>



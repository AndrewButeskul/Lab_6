<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="nothing">

    <title>Форма</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <style>
    	form {
    		background-color: #f9f9f9;
    		padding: 20px;
    		margin: 20px;
    	}
    </style>
  </head>

  <body>
    <div class="container">

      <div class="row">
      	<div class="col-xl-12">
      		<form action="conect.php" method="POST">
      			<legend>Библиотека</legend>

      			<div class="form-group">
      				<label for="">ID</label>
      				<input type="text" class="form-control" id="id" name="id" placeholder="">
      			</div>
      		
      			<div class="form-group">
      				<label for="">Автор</label>
      				<input type="text" class="form-control" id="author" name="author" placeholder="Например, Дейл Карнеги">
      			</div>
      		
      			<div class="form-group">
      				<label for="">Название книги</label>
      				<input type="text" class="form-control" id="bookname" name="bookname" placeholder="Гарри Поттер">
      			</div>

            <div class="form-group">
              <label for="">Анотация</label>
              <input type="text" class="form-control" id="abstractname" name="abstractname" placeholder="">
            </div>

            <div class="form-group">
              <label for="">ISBN</label>
              <input type="text" class="form-control" id="isbn" name="isbn" placeholder="">
            </div>

            <div class="form-group">
              <label for="">Отзыв</label>
              <input type="text" class="form-control" id="review" name="review" placeholder="Текст">
            </div>
      		
      			<button type="submit" class="btn btn-primary" name="save">Добавить и сохранить</button>
            <button type="submit" class="btn btn-primary" name="edit">Редактировать</button>
            <button type="submit" class="btn btn-primary" name="view">Посмотреть</button>
            <button type="submit" class="btn btn-primary" name="remove">Удалить данные</button>

      		</form>
      	</div>
      </div> 

    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
	
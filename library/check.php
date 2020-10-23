<?php
	$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
	$book = filter_var(trim($_POST['book']), FILTER_SANITIZE_STRING);
	$date_start = $_POST['start'];
	$date_finish = $_POST['finish'];
	$reader = filter_var(trim($_POST['reader']), FILTER_SANITIZE_STRING);
	
	
	if(mb_strlen($surname)<1 || mb_strlen($surname)>50){
		echo '<div style="color: red;">Неправильно введене прізвище!</div><hr>';
		exit();
	}
	else if(mb_strlen($name)<1 || mb_strlen($name)>50){
		echo '<div style="color: red;">Неправильно введене ім`я!</div><hr>';
		exit();
	}
	
	else if(mb_strlen($tel)<13 || mb_strlen($tel)>13){
		echo '<div style="color: red;">Неправильно введений номер телефону!</div><hr>';
		exit();
	}
	
	
	
	$mysql = new mysqli('library','mysql','mysql','library');
	$mysql->query("INSERT INTO `users` (`surname`, `name`, `number`, `book`, `start`, `finish`, `answer`) VALUES('$surname', '$name', 
	'$tel', '$book', '$date_start', '$date_finish', '$reader')");
	
	print_r('<div style="color: green;">Ви успішно забронювали книгу!</div><hr>');
	exit();
	
	$mysql->close();
	
?>
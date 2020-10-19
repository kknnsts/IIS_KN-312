<?php
	$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$father = filter_var(trim($_POST['father']), FILTER_SANITIZE_STRING);
	$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$event = filter_var(trim($_POST['event']), FILTER_SANITIZE_STRING);
	
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
	
	else if(strpos($email, '@')== false){
		echo '<div style="color: red;">Неправильно введений email!</div><hr>';
		exit();
	}
	
	$mysql = new mysqli('library','mysql','mysql','library');
	$mysql->query("INSERT INTO `users` (`surname`, `name`,
	`fath`, `number`, `email`, `event`) VALUES('$surname', '$name', 
	'$father', '$tel', '$email', '$event')");
	
	print_r('<div style="color: green;">Ви успішно зареєструвались!</div><hr>');
	exit();
	
	$mysql->close();
	
?>
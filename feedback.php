<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сообщение отправлено</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/nbs.css"> 
    <link rel="stylesheet" href="//raw.githubusercontent.com/daneden/animate.css/master/animate.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900&amp;subset=cyrillic" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.flexisel.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<?
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
                
            $send = '
            Отправитель: ' . $name . '
            E-mail:' . $mail . '
            Телефон:' . $phone . '
            Сообщение: ' . $message;

            $mail = 'zakaz@krasimokna.ru';
            $headers = "From: $mail\r\nReply-To: $email" . "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8";

            if ((isempty($email)) or (isempty($phone))) {
            	
            } else {
			mail('zakaz@krasimokna.ru, serj.solntsev@yandex.ru', 'Форма обратной связи', $send, $headers);
			header('Refresh: 5; URL=http://krasimokna.ru');
			echo ('
			<div class="alert alert-success container my-5" role="alert">
				<h4 class="alert-heading">Сообщение отправлено!</h4>
				<p>Наш специалист свяжется с вами в ближайшее время <br>
				<a href="http://krasimokna.ru" class="alert-link">Вернуться на главную</a></p>
			</div>');
			echo ('<br/><br/>');
			}

            
?>

</body>
</html>
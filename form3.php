<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['name'] ))
{
    $to = "solar-gard@ukr.net";
    $from = '';
    $subject = "Проверка почты";
    $message = 'Название ролика: '.$_POST['name'].';;';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <>\r\n";
    $result = mail($to, $subject, $message, $headers);

    if ($result){
        echo "<p class='green-text'>Ваш заказ <span></span> принят в работу.<br>В скором времени с вами свяжется наш специалист для уточнения деталей.</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
    echo "<p>Заполните поле 'НАЗВАНИЕ ВИДЕОРОЛИКА'</p>";
}
?>
</body>
</html>
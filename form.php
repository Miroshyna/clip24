<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['telephone'] ))
{
    $to = "solar-gard@ukr.net";
    $from = '';
    $subject = "Проверка почты";
    $message = 'Имя: '.$_POST['name'].';<br> Телефон: '.$_POST['telephone'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <>\r\n";
    $result = mail($to, $subject, $message, $headers);

    if ($result){
        echo "<p class='green-text'>Ваш заказ принят в работу.<br>В скором времени с вами свяжется наш специалист для уточнения деталей.</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
    echo "<p>Данное поле обязательно</p>";
}
?>

</body>
</html>
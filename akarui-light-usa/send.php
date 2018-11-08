<?
if((isset($_POST['user_name'])&&$_POST['user_name']!="")&&(isset($_POST['user_phone'])&&$_POST['user_phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'akarui.solution@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Форма обратной связи Akarui'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
<p>Форма обратной связи Akarui</p>
                        <p>Имя: '.$_POST['user_name'].'</p>
                        <p>e-mail: '.$_POST['user_phone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <adodonov@i.ua>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

header('Location: http://akarui-light.com/index.html');


?>
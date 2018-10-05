<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'jackvorobey308@gmail.com, handyheater12345@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ товара'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
<p>Форма заказа Handy Heater</p>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>                          
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <adodonov@i.ua>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

header('Location: http://handyheater.kz/index.html');


?>
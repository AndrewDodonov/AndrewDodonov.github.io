<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['sex'])&&$_POST['sex']!="")&&(isset($_POST['textarea'])&&$_POST['textarea']!="")&&(isset($_POST['date'])&&$_POST['date']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'adodonov@i.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Message'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['name'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p>                         <p>Sex: '.$_POST['sex'].'</p> 
                        <p>Date: '.$_POST['date'].'</p>
                        <p>Text: '.$_POST['textarea'].'</p>  
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <adodonov@meta.ua>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
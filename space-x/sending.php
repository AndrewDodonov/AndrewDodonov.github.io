<?

$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$textarea = $_POST['textarea'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$sex = htmlspecialchars($sex);
$date = htmlspecialchars($date);
$textarea = htmlspecialchars($textarea);

$name = urldecode($name);
$email = urldecode($email);
$sex = urldecode($sex);
$date = urldecode($date);
$textarea = urldecode($textarea);

mail("adodonov@i.ua", "Order", "Name:".$name.". E-mail: ".$email."sex:".$sex.". Date: ".$date."Textarea: ".$textarea ,"From: adodonov@meta.ua \r\n");



?>
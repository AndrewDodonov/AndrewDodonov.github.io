<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// require_once('phpmailer/PHPMailerAutoload.php');


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


// require 'phpmailer/src/OAuth.php';
// require 'phpmailer/src/POP3.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$option = $_POST['user_option'];
$message = $_POST['user_message'];



//$mail->SMTPDebug = 3;                               // Enable verbose debug output


try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'webskytrade@gmail.com';                 // SMTP username
    $mail->Password = '54321goodluck09876';                           // SMTP password
    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webskytrade@gmail.com', 'Akarui');
    $mail->addAddress('akarui.solution@gmail.com');               // Name is optional


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Форма обратной связи Akarui';
    $mail->Body    =
                      "<tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid; width: 30%; background-color: #f8f8f8;'><b>Имя</b></td>
              				  <td style='padding: 10px; border: #e9e9e9 1px solid; width: 70%; background-color: #f8f8f8;'>$name</td>
                      </tr>".
                      "<tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid; width: 30%; background-color: #f8f8f8;'><b>e-mail</b></td>
              				  <td style='padding: 10px; border: #e9e9e9 1px solid; width: 70%; background-color: #f8f8f8;'>$phone</td>
                      </tr>".
                      "<tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid; width: 30%; background-color: #f8f8f8;'><b>Сообщение</b></td>
              				  <td style='padding: 10px; border: #e9e9e9 1px solid; width: 70%; background-color: #f8f8f8;'>$message</td>
                      </tr>".

                      "<tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid; width: 30%; background-color: #f8f8f8;'><b>Сайт</b></td>
              				  <td style='padding: 10px; border: #e9e9e9 1px solid; width: 70%; background-color: #f8f8f8;'>http://akarui-light.com</td>
                      </tr>".
                      "<tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid; width: 30%; background-color: #f8f8f8;'><b>Цель</b></td>
              				  <td style='padding: 10px; border: #e9e9e9 1px solid; width: 70%; background-color: #f8f8f8;'>$option</td>
                      </tr>";

                      // "name: $name. \n". "<br>".
                      //                     "phone: $phone. \n". "<br>".
                      //                       "Option: $option". "<br>".

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent +';
    // header('location: index.html');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>

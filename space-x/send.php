<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['sex'])&&$_POST['sex']!="")&&(isset($_POST['textarea'])&&$_POST['textarea']!="")&&(isset($_POST['date'])&&$_POST['date']!="")){ //�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'adodonov@i.ua'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
        $subject = 'Message'; //��������� ���������
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
                </html>'; //����� ������ ��������� ����� ������������ HTML ����
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //��������� ������
        $headers .= "From: ����������� <adodonov@meta.ua>\r\n"; //������������ � ����� �����������
        mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
}
?>
<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
$name = htmlspecialchars($_POST['your-name']);
$tel = $_POST['your-tel'];
$summ = $_POST['sum'];
$srok = $_POST['srok'];
$error = '';

if(!$name)
{
$error .= '<div class="errorName">Вкажіть своє ім`я</div>';
}

if(!$tel)
{
$error .= '<div class="errorTel">Вкажіть свій діючий номер</div>';
}



if(!$error)
{

  // golofaev73@gmail.com
$to      = 'akademuk24@gamil.com';
$subject = 'Письмо с сайта Green Groshi';
// текст письма
$message = '
<html>
<head>
  <title>Письмо с сайта Tobi Groshi</title>
</head>
<body>
  <table>
    <tr>
      <td>Имя</td>
      <td>'. $name .'</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>'. $tel .'</td>
    </tr>
    <tr>
      <td>Сума</td>
      <td>'. $summ .'</td>
    </tr>
    <tr>
      <td>Строк</td>
      <td>'. $srok .'</td>
    </tr>
  </table>
</body>
</html>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail = mail($to, $subject, $message, $headers);

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}

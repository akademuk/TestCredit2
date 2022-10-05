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
$error .= '<div class="errorName">Укажите свое имя</div>';
}

if(!$tel)
{
$error .= '<div class="errorTel">Укажите свой действующий номер</div>';
}



if(!$error)
{

$to      = 'golofaev73@gmail.com';
$subject = 'Письмо с сайта Test Credit';
// текст письма
$message = '
<html>
<head>
  <title>Письмо с сайта Test Credit</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
tr td:nth-of-type(1) {
    width: 100px;
}
tr td:nth-of-type(2) {
    width: 200px;
}
</style>
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

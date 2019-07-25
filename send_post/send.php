<?php
/*
Форма обратной связи может получать сообщения с любых почтовых ящиков.
Исправлена проблема кодировки при получении писем почтовым клиентом Outlook.
Вы скачали её с сайта Epic Blog https://epicblog.net Заходите на сайт снова!
ВНИМАНИЕ! Лучше всего в переменную myemail прописать почту домена, который использует сайт. А не mail.ru, gmail и тд.
*/
if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */
	$to = "info@lakefarm.kz" ; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "berik9105@gmail.com"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net

/* Указываем переменные, в которые будет записываться информация с формы */
	$first_name = $_POST['user_name'];
	$email = $_POST['user_email'];
	$phone = $_POST['user_phone'];
	$message = $_POST['user_message'];
    $subject = "Получено новое сообщение";//Фиксированная тема письма

/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}

/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте!
Сообщение отправлено! Ближайшее время с Вами свяжемся.
Имя отправителя: $first_name
E-mail: $email
Номер телефона: $phone
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

$headers = "From: $from \r\n";

/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://Lakefarm.kz'>Вернуться на сайт.</a>";
}
?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://lakefarm.kz");}
window.setTimeout("changeurl();",3000);
</script>

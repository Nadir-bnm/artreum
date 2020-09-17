<?php
/*
ВНИМАНИЕ! Лучше всего в переменную myemail прописать почту домена, который использует сайт. А не mail.ru, gmail и тд.
*/
if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */
$to = "info@artreumllc.com"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = "info@artreumllc.com"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net

/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// $subject = "Форма отправки сообщений с сайта Epic Blog";

/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("<br /> Incorrect input");
}

/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте!
Было отправлено сообщение с сайта!
Имя отправителя: $first_name
Тема письма: $subject
E-mail: $email
Номер телефона: $phone
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

$headers = "From: $from \r\n";

/* Отправка сообщения, с помощью функции mail()
    ссылку на сайт тут тоже поменять */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Your message was successfuly sent. Thank you " . $first_name . ", we will get back to you soon.";
echo "<br /><br /><a href='https://artreum.net'>Go Back.</a>";
}
?>



<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://artreum.net");}
window.setTimeout("changeurl();",3000);
</script>
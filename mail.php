<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
    if (isset($_POST['text'])) {$text = $_POST['text'];}

    $to = "8rezvanov8@gmail.com";
    $sendfrom   = "8rezvanov8@gmail.com";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $message = "$formData<br> <b>Имя пославшего:</b> $name <br><b>Телефон:</b> $phone <br><b>Сообщение:</b> $text";
    $send = mail ($to, $subject, $message, $headers);
    $to = "a.mkr@icloud.com";//stat of form
    $sendfrom   = "stat@bb-one.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $message = "$formData<br> <b>Имя пославшего:</b> $name <br><b>Телефон:</b> $phone <br><b>Сообщение:</b> $text";
    $send = mail ($to, $subject, $message, $headers);

    if ($send == 'true')
    {
    echo '<center><p class="success"><br>Спасибо за отправку, в ближайшее время мы позвоним!</p></center>';
    }
    else 
    {
    echo '<center><p class="fail"><b><br>Ошибка. Сообщение не отправлено!</b></p></center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}
?>
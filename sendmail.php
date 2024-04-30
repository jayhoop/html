<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jhdreamy@gmail.com"; // 받는 사람 이메일 주소
    $from = $_POST['email']; // 보내는 사람 이메일 주소
    $subject = "New Message from Website"; // 메일 제목
    $message = $_POST['message']; // 메시지 내용
    $headers = "From: $from";

    // 메일 보내기
    if(mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>

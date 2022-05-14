<?php
$link = mysqli_connect("localhost", "ck71790_main", "12345678", "ck71790_main");

$name = $_POST['name'];
$surname = $_POST['surname'];
$dadname = $_POST['dadname'];
$phone = $_POST['phone'];

$sql = "INSERT INTO Appointment VALUES (NULL, NOW(), '{$surname}', '{$name}', '{$dadname}', '{$phone}')";
$result = mysqli_query($link, $sql);
$date = date("j.m H:i:s");
$time = date("H:i:s");

mail('kirillronjin@gmail.com', 'Заявка на звонок',$date. ' ' . $surname . ' ' . $name . ' ' . $dadname . ' ' . $phone)

?>
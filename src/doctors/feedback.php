<?php
$link = mysqli_connect("localhost", "ck71790_main", "12345678", "ck71790_main");

$name = $_POST['fname'];
$surname = $_POST['fsurname'];
$dadname = $_POST['fdadname'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO Feedback VALUES (NULL, NOW(), '{$surname}', '{$name}', '{$dadname}', '{$feedback}')";
$result = mysqli_query($link, $sql);

?>
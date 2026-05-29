<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $date = trim($_POST["date"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name == "" || $email == "" || $message == "") {
        echo "Please fill required fields!";
        exit;
    }

    $data =
        "------------------------" . PHP_EOL .
        "Name: " . $name . PHP_EOL .
        "Email: " . $email . PHP_EOL .
        "Phone: " . $phone . PHP_EOL .
        "Date: " . $date . PHP_EOL .
        "Message: " . $message . PHP_EOL .
        "Time: " . date("Y-m-d H:i:s") . PHP_EOL .
        "------------------------" . PHP_EOL . PHP_EOL;

    $result = file_put_contents(
        __DIR__ . "/../data/appointments.txt",
        $data,
        FILE_APPEND
    );

    var_dump($result);
    exit;
}

?>
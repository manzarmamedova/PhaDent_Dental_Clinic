<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $date = trim($_POST["date"]);
    $message = trim($_POST["message"]);

    // basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill all required fields!";
        exit;
    }

    // data format
    $data = "Name: $name | Email: $email | Date: $date | Message: $message" . PHP_EOL;

    // save to file (mini database)
    file_put_contents("../data/appointments.txt", $data, FILE_APPEND);

    echo "Appointment successfully saved. We will contact you soon.";
}

?>
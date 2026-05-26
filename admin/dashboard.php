<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$file = "../data/appointments.txt";
$data = file_exists($file) ? file($file) : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .box { background: #f4f4f4; padding: 10px; margin: 10px 0; border-radius: 8px; }
    </style>
</head>
<body>

<h2>Appointments</h2>

<a href="logout.php">Logout</a>

<?php foreach ($data as $line): ?>
    <div class="box">
        <?php echo $line; ?>
    </div>
<?php endforeach; ?>

</body>
</html>
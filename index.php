<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_NAME'];
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

  

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $age=$_POST["age"];

    $stmt = $conn->prepare("INSERT INTO mahasiswa (name, gender, age) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $gender, $age); 

    if ($stmt->execute()) {
        echo "New record has ID: " . $stmt->insert_id;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    
    
}


?>

<form action="" method="post">
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" required><br>

    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" required><br>

    <label for="age">Age</label>
    <input type="number" id="age" name="age" required><br>

    <button type="submit" name="submit">Submit</button>
</form>


    
</body>
</html>
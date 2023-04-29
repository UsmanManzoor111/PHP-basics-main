<?php
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=localhost;dbname=p190068_usmanmanzoor", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

print_r($_POST);
// die;
$park_code = $_GET['Park_code'];
$park_name = $_GET['Park_name'];
$park_city = $_GET['Park_city'];
$park_country = $_GET['Park_country'];

$query_1 = $conn->prepare("insert into themepark values(?,?,?,?)");
$query_1->execute([$park_code,$park_name,$park_city,$park_country]);
?>

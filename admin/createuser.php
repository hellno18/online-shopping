<html>
<title>create user</title>
<body>
<?php 

$id=$_POST["username"];
$pwd=$_POST["password"];
$hashed_password = password_hash($pwd, PASSWORD_DEFAULT); // hash password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully"."<br>";


// insert to database 
$sql = "INSERT INTO admin (username,password,full_name) VALUES('$id', '$hashed_password','$id')";

if ($conn->query($sql) === TRUE) {
    //give alert message
    echo "<script> alert('ユーザー登録した'); 
        window.location.href='login.php';</script>";   
}

?>

</body>
</html>
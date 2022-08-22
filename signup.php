<?php include("connect.php");
header('location: log.php');


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];


$sql = "SELECT * FROM sign WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO sign (name,email,password,conpassword) VALUES ('$name','$email','$password','$conpassword')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>
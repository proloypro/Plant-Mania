<?php include("connect.php");
header('location: contact.php');


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "SELECT * FROM contact WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>
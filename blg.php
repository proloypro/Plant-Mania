<?php include("connect.php");

header('location: blog.php');


$name = $_POST['name'];
$email = $_POST['email'];
$blog = $_POST['blog'];


$sql = "SELECT * FROM blog WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO blog (name,email,blog) VALUES ('$name','$email','$blog')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>
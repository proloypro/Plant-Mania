<?php include("connect.php");
header('location: cart.php');


$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];


$sql = "SELECT * FROM carty";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num =! 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO carty (country,state,zip) VALUES ('$country','$state','$zip')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>
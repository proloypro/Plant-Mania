<?php include("connect.php");



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pno = $_POST['pno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$notes = $_POST['notes'];


$sql = "SELECT * FROM checkout WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO checkout (fname,lname,email,pno,address,city,state,notes) VALUES ('$fname','$lname','$email','$pno','$address','$city','$state','$notes')";
    mysqli_query($conn,$reg);
    echo "Your order has been Received";
}

?>
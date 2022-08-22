<?php
 
 $conn = mysqli_connect('localhost', 'root', '','plant');
 if($conn){
	echo "succesfully connected";
}
else{
	echo "not connected";
}
    
?>
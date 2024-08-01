
<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $message=$_POST['message'];
   



$sql="INSERT INTO `contact`( `name`, `email`, `phone`, `location`, `message`)
 VALUES ('$name','$email','$phone','$location','$message')";


$result= mysqli_query($con,$sql);
if($result){
    echo "Data inserted successfully";
}else{
    die(mysqli_error($con));
}

}
?>
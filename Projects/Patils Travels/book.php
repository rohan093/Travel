<?php 
include 'config.php';

if(isset($_POST['book'])){
    $destination=$_POST['destination'];
    $NoP=$_POST['NoP'];
    $checkIn=$_POST['checkIn'];
    $checkOut=$_POST['checkOut'];
    // $checkIn=date('y-m-d', strtotime($_POST['checkIn']));
    // $checkOut=date('y-m-d', strtotime($_POST['checkOut']) );
    $details=$_POST['details'];
   
$sql="INSERT INTO `book`( `destination`, `NoP`, `checkIN`, `checkOut`, `details`)
 VALUES ('$destination','$NoP','$checkIn','$checkOut','$details')";

$result= mysqli_query($con,$sql);
if($result){
    echo "Data inserted successfully";
}else{
    die(mysqli_error($con));
}

}
?>
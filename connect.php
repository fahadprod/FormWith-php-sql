<?php
   $fname = $_POST['fname'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $type = implode(',', $_POST['type']);

   $conn = new mysqli('localhost','root', '','donation');
   if($conn->connect_error){
       die('Connection Failed : ' .$conn->connect_error);
   }else{
       $stmt = $conn->prepare("INSERT INTO `donate`(`fname`, `address`, `phone`, `email`, `type`) VALUES (?,?,?,?,?)");
       $stmt->bind_param("sssss", $fname,$address,$phone,$email,$type);
       $stmt->execute();
       echo "<script>alert('donation successfully')</script>";
       $stmt->close();
       $conn->close();
       header('location: donate.php');
   }
   
?>
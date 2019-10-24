<?php
   $fname = $_POST['fname'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $child = $_POST['child'];
   $amount = $_POST['amount'];
   $date = $_POST['date'];

   $conn = new mysqli('localhost','root', '','donation');
   if($conn->connect_error){
       die('Connection Failed : ' .$conn->connect_error);
   }else{
       $stmt = $conn->prepare("INSERT INTO `student`(`fname`, `address`, `phone`, `email`, `child`, `amount`, `date`) VALUES (?,?,?,?,?,?,?)");
       $stmt->bind_param("sssssss", $fname,$address,$phone,$email,$child,$amount,$date);
       $stmt->execute();
       echo "<script>alert('donation successfully')</script>";
       $stmt->close();
       $conn->close();
       header('location: sponsor.php');
   }
   
?>
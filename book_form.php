<?php

   $connection = mysqli_connect('localhost','root','','SOF102_A1');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $room_type = $_POST['room_type'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $check_in = $_POST['check_in'];
      $check_out = $_POST['check_out'];

      $request = " insert into book_form(name, email, phone, room_type, location, guests, check_in, check_out) values('$name','$email','$phone','$room_type','$location','$guests','$check_in','$check_out') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
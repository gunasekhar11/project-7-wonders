<?php
   $connection = mysqli_connect('localhost','root','','book');

   if(isset($_POST['send'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $pwd = $_POST['pwd'];
      $cpwd = $_POST['cpwd'];
     	$request = "insert into register values('$fname','$lname','$email','$pwd','$cpwd')";
		mysqli_query($connection,$request);
      header('location:entry.html');
   }else{
      echo 'something went wrong please try again!';
   }
?>

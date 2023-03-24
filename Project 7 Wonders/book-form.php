<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Travel '7' Wonders</title>

   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css">

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

   <!-- Font Awesome -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

   <link rel="icon" href="Assets/Logo/favicon.png">
</head>

<body id="page-top">

   <?php
      $connection = mysqli_connect('localhost','root','','book');

      if(isset($_POST['send'])){
        $name = $_POST['name'];
         $email = $_POST['email'];
          $phone = $_POST['phone'];
         $address = $_POST['address'];
         $whereto = $_POST['whereto'];
        $howmany = $_POST['howmany'];
        $arrival = $_POST['arrival'];
        $leaving = $_POST['leaving'];
        $request = "insert into book_form(name, email, phone, address, whereto, howmany, arrival, leaving) values('$name','$email','$phone','$address','$whereto','$howmany','$arrival','$leaving') ";
        mysqli_query($connection, $request);
      }else{
         echo 'something went wrong please try again!';
      }
   ?>

   <!-- Navigation-->
   <section id="navbar-top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-lg bg-light" id="mainNav">
         <div class="container px-5">
            <img class="logo" src="Assets/Logo/favicon.png" alt="">
            <a class="navbar-brand fw-bold" href="index.html">TRAVEL "7" WONDERS</a>
            <button class="navbar-toggler menu-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                  <li class="nav-item"><a class="nav-link me-lg-3" href="index.html">Home</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="packages.html">Packages</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="about.html">About</a></li>
                  <a href="book.html"><button type="button" class="btn btn-dark rounded-pill px-2 mx-2 ms-4 book-now-btn" name="button"><b>Book Now</b></button></a>
               </ul>
            </div>
         </div>
         <a href="entry.html"><button class="btn btn-outline-dark rounded-pill"type="button" name="button" style="margin-right:20px;"><b>Logout</b></button></a>
      </nav>
   </section>

      <section id="ticket">
         <h1 style="margin-top:100px;margin-bottom:40px;font-size:50px;color:#91d0ee;">PREVIEW</h1>
         <!-- <img src="Assets/Pics/congrats.gif" alt="" class="congrats"> -->
         <img src="Assets/Pics/0.png" alt="" class="ticket shadow-lg" style="margin-bottom:80px;">
         <img src="Assets/Pics/ticket1.jpg" alt="">
         <div class="ticket-information">
            <p class="name ticket-info"> <?php echo $name; ?></p>
            <p class="to ticket-info"><?php echo $whereto; ?></p>
            <p class="date ticket-info"><?php echo $arrival; ?> , 12:45</p>
         </div>
         <a href="payment.html"><button style="margin-bottom:100px;margin-top:-150px"type="button" name="button" class="services-button">Proceed To Pay></button></a>

      </section>

      <footer class="white-section shadow-lg" id="footer">
         <div class="container-fluid">
            <i class="social-icon fab fa-facebook-f"></i>
            <i class="social-icon fab fa-twitter"></i>
            <i class="social-icon fab fa-instagram"></i>
            <i class="social-icon fas fa-envelope"></i>
            <p>© Copyright 2022 Travel "7" Wonders</p>
         </div>
      </footer>
   </body>
</html>

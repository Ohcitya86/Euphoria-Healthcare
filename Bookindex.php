<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email,number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Book_Page.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
   
  
</head>
<body>


    <header class="header">
        <img src="images/logo.jpg" id="logo" alt="">

        <nav class="navbar">
            <a href="index.html"><b>home</b></a>
            <a href="index.html"></a>
            
            <a href="#"><b>Log In / Sign Up</b></a>
            <a href="service.html"><b>services</b></a>
                <a href="service.html"></a>
            <a href="Book_Page.html"><b>book</b></a>
                <a href="Book_Page.html"></a>
            <a href="revieww.html"><b>Reviews</b></a>
                <a href="revieww.html"></a>
            

            
        </nav>

        <div class="icons">
            <div id="menubar" class="fas fa-bars"></div>
            <a href="https://www.facebook.com/ohcitya.bhattacharjee">contact</a>
        </div>
    </header>
<br><br><br><br>

<!-- booking section starts   -->

<section class="book" id="book">

<h1 class="heading">Book an Appointment</h1>
    <div class="row">
  
        <div class="image">
            <img src="image/book.svg" alt="">
        </div>
        
        <br><br><br><br>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
        }
        ?>

        <span><input type="text" name="name" placeholder="Enter Your Name" class="box" required> </span> 
        <span><input type="email" name="email" placeholder="Enter Your Email" class="box" required> </span>
        <span><input type="number" name="number" placeholder="Enter Your Number" class="box" required></span>
        <span><input type="datetime-local" name="date" class="box" required></span>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
		<p class="PayNow">Do you want to provide Doctor Fee? <a href="payindex.php">PayHere</a>.</p>
        </form>
    </div>

</section>

<script src="js/script.js"></script>



</body>
</html>


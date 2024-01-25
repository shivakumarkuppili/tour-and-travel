<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scaled=1.0">
        <title>book </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="scripts" href="C:\xampp\htdocs\tour and travel\js\scripts.js">


    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="signup.php">sign in/sign up</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <div class="heading" style="background:url(images/book.jpg) no-repeat" >
            <h1 style="color:rgb(22,55,255); background:var(--light-bg);">book now</h1>
        </div>
        <section class="booking">
            <h1 class="heading-title">book your trip!</h1>
            <form action="book_form.php" method ="post" class="book-form" >
                <div class="flex">
                    <div class="inputbox">
                        <span>name:</span>
                        <input type="text" placeholder="enter your name" name="name">
                

                    </div>
                    <div class="inputbox">
                        <span>email:</span>
                        <input type="email" placeholder="enter your email" name="email">
                     

                    </div>
                    <div class="inputbox">
                        <span>phone number:</span>
                        <input type="number" placeholder="enter your number" name="phone">
           

                    </div>
                    <div class="inputbox">
                        <span>address:</span>
                        <input type="text" placeholder="enter your address" name="address">
                  

                    </div>
                    <div class="inputbox">
                        <span>to where:</span>
                        <input type="text" placeholder="place you want to visit" name="location">

                    </div>
                    <div class="inputbox">
                        <span>how many:</span>
                        <input type="number" placeholder="number of guests" name="guests">

                    </div>
                    <div class="inputbox">
                        <span>arrivals:</span>
                        <input type="date" name="arrivals">

                    </div>
                    <div class="inputbox">
                        <span>leaving:</span>
                        <input type="date" name="leaving">

                    </div>
                    


                </div>
               <input type="submit" class="btn" name="send" value="submit" >  
              
            </form>
        </section>



        <!--footer section-->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                     <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                   
                </div>
                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>privacy and policy</a>

                    <a href="#"><i class="fas fa-angle-right"></i>terms of uses</a>

                </div>
                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                    <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>

                    <a href="#"><i class="fas fa-phone"></i>skrockers@gmail.com</a>

                    <a href="#"><i class="fas fa-phone"></i>vizag,india-532001</a>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a>

                    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>



                </div>
            </div>

           <div class="credit">created by <span>shiva kumar</span></div>

        </section>

      
        




        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
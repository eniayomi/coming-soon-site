<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>DevopsCrunch Comming Soon!</title>
</head>

<body>



<?php

// To be included in same directory as form page
// Enter your Host, username, password, database below.
$con = mysqli_connect("127.0.0.1","root","8iu7*IU&","devopscrunch");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `emails` (email, trn_date)
VALUES ('$email', '$trn_date')";
        $result = mysqli_query($con,$query);
 if($result){
            echo "<script>
            alert('Thank you for joining the waiting list');
          </script>";
        }
    }else{
        echo "";
        ?>

<?php } ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-0 " id="mainNav">
        <div class="container align-items-baseline d-flex mt-4  " data-aos="fade-right" data-aos-duration="2000">
            <a class="navbar-brand" href="#"> <img src="./images/logo.svg" alt=""></a>
            <ul class="navbar__social d-flex justify-content-between align-items-center">
                <a href="#">
                    <img src="./images/twitter.png" alt="">
                    </li>
                    <a href="#">
                        <img src="./images/facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="./images/instagram.png" alt="">
                    </a>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!--Main Section -->
    <section class="container main-section mt-5 mt-md-0">
        <img class="image__rocket" src="./images/rocket.svg" alt="">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-sm-10 col-md-10 col-lg-8   text-center">
                <p class="text-uppercase text-white font-weight-600 subtitle mb-2">Launched Soon</p>
                <h1 class="font-weight-600 title">Let's go back to the cloud</h1>
                <!--Clock -->
                <ul class="list-unstyled text-white d-flex justify-content-around clock align-items-center mx-5 mt-4">
                    <li>
                        <p id="days">
                            -
                        </p>
                        <p class="text-uppercase"> Days</p>
                    </li>
                    <img src="./images/separator.svg" alt="">
                    <li>
                        <p id="hours">
                            -
                        </p>
                        <p class="text-uppercase"> Hours</p>
                    </li>
                    <img src="./images/separator.svg" alt="">
                    <li>
                        <p id="minutes">
                            -

                        <p class="text-uppercase">Minutes</p>
                        </p>
                    </li>
                    <img src="./images/separator.svg" alt="">
                    <li>
                        <p id="seconds">
                            -
                        </p>
                        <p class="text-uppercase"> Seconds</p>
                    </li>
                </ul>
                <!--Clock -->
                <!--Form -->
                <form action="" method="POST">
                    <div class="form-row  mt-4">
                        <div class="col-12 col-lg-8 mx-auto ">
                            <input type="text" class="form-control form-control-lg email__form " placeholder=""
                                id="email" name="email" aria-describedby="emailHelp" maxlength="34" value="">
                            <button class="btn form__button btn  my-3 my-lg-1 mr-2 text-uppercase " type="submit"
                                name="submit">
                                Join watchlist</button>
                        </div>

                    </div>
                </form>
                <!--Form -->
            </div>
            <div class="col-4  d-none d-lg-block  text-center position-relative ">
                <img class="position-absolute image-server" src="./images/server.png" alt="">
            </div>
        </div>

    </section>
    <!--Main Section -->

    <!-- JS Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <!-- JS Custom Script -->
    <script src="./app.js"></script>

    
</body>

</html>
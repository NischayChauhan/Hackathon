<?php
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dr. Sanguatio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- favicon-->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- google font (add it before style.css because we are gona use it in css) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- wow js (It should come after jqery file because it will use that and for this wow js we also first need to link animate.css )-->
    <script src="js/wow/wow.min.js"></script>

    
    <!-- custom javascript files -->
    <script type="text/javascript" src="js/main.js"></script>
    
</head>
<body>

    <nav class="navbar navbar-expand-md bg-tulip fixed-top nav-transparent ">
        <div class="container">
            <a href="/home" class="navabar-brand text-warning font-weight-bold">Dr. Sanguatia</a>	
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar"> <span class="navbar-toggler-icon"></span></button>
            <div class="navbar-collapse text-center collapse " id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/search" class="nav-link custom-text-color-nav-item">SEARCH DONOR</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/login.php" class="nav-link custom-text-color-nav-item">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/signUp.php" class="nav-link custom-text-color-nav-item">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/doctors.php" class="nav-link custom-text-color-nav-item"> Doctors Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- home -->
    <div class="bgimg animated fadeIn" style="animation-delay:.1s;">
                <div class="main-background-color">
                    <div class="container text-center headerset  ">
                        <h2 class="animated fadeIn" style="animation-delay:.2s;">Life Restarts here...</h2>
                        <h3 class="animated fadeIn" style="animation-delay:.5s;">It's NICE TO SEE YOU HERE</h3>

                        <button class="btn btn-blue btn-xl btn-general animated fadeIn " style="animation-delay:.8s; margin-right:20px;" onclick="window.location.href='/auth/login'">contribute blood</button>
                        <button class="btn btn-blue btn-xl btn-general animated fadeIn " style="animation-delay:.8s; margin-right:20px;" onclick="window.location.href='/auth/login'">search donor</button>
                        <button class="btn btn-blue btn-xl btn-general animated fadeIn " style="animation-delay:.8s;" onclick="window.location.href='/auth/login'">search hospital</button>
                        
                        <div class="container arrow-mark" onclick="scrollWin()">
                            <div class="arrow text-center">
                                 <span></span> <span></span>  <span></span>  
                            </div>
                        </div>	   
                    </div>
                </div>
            </div>

    <!-- services section -->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <h3 class="text-center">Services</h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">

                <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">

                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-burn fa-2x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>DONOR</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>lorem ipsum is a dummy content that i want to generate here.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                               <i class="fas fa-procedures fa-2x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>RECIEVER</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>lorem ipsum is a dummy content that i want to generate here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-hospital fa-2x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Doctors</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>lorem ipsum is a dummy content that i want to generate here.</p>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
    </section>
    
    <!-- temporary space -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    </body>
</html>
           
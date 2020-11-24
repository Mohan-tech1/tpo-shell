<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Placement Orgnization </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- style file -->
    <link rel="stylesheet" type="text/style" href="style.css">
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav id="nav" class="navbar navbar-expand navbar-light my-2  border-rounded">
            <a class="navbar-brand" href="index.php"><img src="images\download.png" alt="logo" height="60px" width="60px"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Computer Sceince and Engineering</a>
                        <a class="dropdown-item" href="#">Electrical Engineering</a>
                        <a class="dropdown-item" href="#">Civil Engineering</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <!-- Image slider -->
        <div id="carouselExampleIndicators" class="carousel slide my-3 text-info" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-50" src="images\slide2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="images\slide1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="images\slide2.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- close slider -->
        <!-- Card  -->
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-lg-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images\slide2.jpg" alt="first card">
                        <div class="card-body">
                            <h4 class="card-title">Rigistration</h4>
                            <div class="card-text">
                                <p>Hallo Mohan lal Sharma </p>
                                <p>what are doing bro .</p>
                                <p>what happen why are you sad </p>
                                <a href="#" class="btn btn-success">Register now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images\slide2.jpg" alt="first card">
                        <div class="card-body">
                            <h4 class="card-title">Rigistration</h4>
                            <div class="card-text">
                                <p>Hallo Mohan lal Sharma </p>
                                <p>what are doing bro .</p>
                                <p>what happen why are you sad </p>
                                <a href="#" class="btn btn-success">Register now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images\slide2.jpg" alt="first card">
                        <div class="card-body">
                            <h4 class="card-title">Rigistration</h4>
                            <div class="card-text">
                                <p>Hallo Mohan lal Sharma </p>
                                <p>what are doing bro .</p>
                                <p>what happen why are you sad </p>
                                <a href="#" class="btn btn-success">Register now</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">Hallo Mohan</div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>
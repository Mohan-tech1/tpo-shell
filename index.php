<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Placement Orgnization </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- style file -->
    <link rel="stylesheet" type="text/style" href="style.css">
    <style>
        #nav {
            font-weight: bold;

            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        #nav a {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav id="nav" class="navbar navbar-expand navbar-light my-2  border-rounded bg-dark ">
            <a class="navbar-brand text-warning " href="index.php">TPO</a>
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
        <div id="carouselExampleIndicators" class="carousel slide my-3 " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="max-height:90vh">
                    <img class="d-block  " src="images\slide2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block text-primary">
                        <h3>Computer Sceince and Engineering</h3>
                        <p> Computer Sceince is good for your future </p>
                        <a href="#" class="btn btn-success">Rigister Now</a>
                    </div>
                </div>
                <div class="carousel-item" style="max-height:90vh">
                    <img class="d-block  " src="images\slide1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block text-primary">
                        <h3>Civil Engineering</h3>
                        <p> Civil is good for your future </p>
                        <a href="#" class="btn btn-success">Rigister Now</a>
                    </div>
                </div>
                <div class="carousel-item" style="max-height:90vh">
                    <img class="d-block" src="images\slide2.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block text-primary">
                        <h3>Electrical Engineering</h3>
                        <p> Electrical is good for your future </p>
                        <a href="#" class="btn btn-success">Rigister Now</a>
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
    </div>

    <!-- our gallery -->
    <div class="container my-4">
        <h1 class="text-center text-white bg-dark">Our Gallery</h1>
        <br>
        <h2 class="text-center text-white bg-primary">Highest Package Students for our college</h2>
        <div class="row my-4">
            <div class="col-lg-2 col-md-3 col-sm-12 ml-3 ">
                <img src="images\b (1).jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 ml-3 ">
                <img src="images\b (2).jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 ml-3 ">
                <img src="images\v.jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 ml-3 ">
                <img src="images\p.jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 mr-3 ">
                <img src="images\download.png" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
        </div>
        <!-- Second row for gallery -->

        <br>
        <h2 class="text-center text-white bg-primary">This branded companey comes our college</h2>
        <div class="row my-4">
            <div class="col-lg-2 col-md-3 col-sm-12 ml-3 ">
                <img src="images\b (1).jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 ml-3 ">
                <img src="images\b (2).jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 ml-3 ">
                <img src="images\v.jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 ml-3 ">
                <img src="images\p.jpg" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 mr-3 ">
                <img src="images\download.png" alt="image" height="100%" width="100%" class="responsive rounded">
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <!-- Contact form is here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12  mx-auto">
                <h1 class="text-center text-white bg-dark"> Contact Us </h1>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="abc@gmail.com" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="mobile" autocomplete="off">
                    </div>
                    <div class="row inlineform">
                        <div class="form-group mx-2 ">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="male" class="form-control">
                        </div>
                        <div class="form-group mx-2">
                            <label for="female">Female</label>
                            <input type="radio" name="gender" id="female" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea name="address" id="address" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="commrnt" id="comment" cols="30" rows="6"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success text-align-center">Contact Now</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer is here -->
    <footer>
        <div class="container my-4">
            <div class="row p-3" style="border: 1px solid black; border-radious:10px;">
                <div class="col-lg-4 col-12" style="border-right:1px solid gray ;">
                    <h3>Social Link</h3>
                    <ul class="list-group " style="border:none;">
                        <li class="list-group-item "><a href="#">InternShala</a></li>
                        <li class="list-group-item"><a href="#">Linkdin</a></li>
                        <li class="list-group-item"><a href="#">Naokari.com</a></li>
                        <li class="list-group-item "><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>Faccebook</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12" style="border-right: solid gray 1px;">
                    <h3>Abobe Link</h3>
                    <ul class="list-group ">
                        <li class="list-group-item"><a href="#">Home</a></li>
                        <li class="list-group-item"><a href="#">Students</a>
                        </li>
                        <li class="list-group-item "><a href="#">ContactUs</a>
                        </li>
                        <li class="list-group-item "><a href="#">About us</a></li>
                        <li class="list-group-item "><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12"></div>
            </div>
            <!-- copy Rights -->
            <h3 class="text-danger bg-dark text-center mt-3">All Copyrights <i class="fa fa-copyright" aria-hidden="true"></i>Reserved by Mohan Pandit 2020</h3>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>

</html>
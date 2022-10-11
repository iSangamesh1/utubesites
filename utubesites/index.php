<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- I tooked it from w3school cdn code from get started -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hare Krishna</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sevices.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->

<!-- the summary of whole above 30 lines code within one line  -->

<?php include 'menu.php'; ?>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-90" alt="..."  height="500" width="1100">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-90" alt="..." height="500" width="1100">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-90" alt="..." height="500" width="1100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section class="my-4">
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid"> 
    <!-- when container fluid section wasn't thee the scroll bar was appearing downwards which was an error and after taking the row class  -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/2.jpg" alt="" class="img-fluid about-img">
            </div>
            
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Sangamesh</h2>
                    <p class="py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta corporis laudantium sequi veniam error sed nihil earum iure quaerat odit excepturi commodi quae adipisci optio voluptatibus ut quam, reprehenderit aut.</p>
                    <a href="about.php" class="btn btn-success">Know More</a>
                </div>
            
        </div>
    </div>
</section>

<section class="my-4">
    <div class="py-5">
        <h3 class="text-center">Our Services</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/3.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Mahadev</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/3.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Mahadev</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/3.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Mahadev</h4>
                    <p class="card-text text-center">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="py-5">
        <h3 class="text-center">Gallery</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12 py-3">
                <img src="images/4.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Comments</label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
        </div>
    </div>
</section>

<footer class="p-3 bg-dark text-white text-center"><p>@sangameshproduction</p></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- i took it from w3school cdn script code from get started-->
</body>
</html>
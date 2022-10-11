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

<!-- as i have removed the navbar it is not showing anything but by below code we can add navbar within simple line of codes  -->

<?php include 'menu.php'; ?>

<div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>Sangamesh Creations</h1>
  <p>This is Sangamesh and his beautiful websites</p>
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

<footer class="p-3 bg-dark text-white text-center"><p>@sangameshproduction</p></footer>

</body>
</html>
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Sinfo - A place for all Startups</title>
<link rel="stylesheet" type="text/css" href="explore.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&family=Poiret+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


   <div class="container-fluid banner">
        <div class="row"> 
            <div class="col-md-12">
             <nav class="navbar"> 
                 <div  class="logo">SinFo  </div>
                   <ul class="nav">
                        <li class="nav-item">
                           <a class="nav-link" href="homepage.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explore.html">EXPLORE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="about.html">ABOUT</a>
                        </li>
                       <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                       </li>
                   </ul>
               </nav>
            </div>
               <div style="color: #ffff" class="container h-100">
      <div class="d-flex justify-content-center h-100">
      	 <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";?>

      	</div>
    
        <div class="searchbar"> 
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
    <ul>
      <li>
    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="photo-1515344905723-babc01aac23d.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup1</h5>
      <p class="card-text">We analyzed a new way of renewable energy startups. Utilight, Fervo Energy, Oxford Photovoltaics, HST Solar, and Kite Power Systems are our 5 picks to watch out for..... This time, we are taking a look at 5 promising renewable energy solutions..</p>
      <p class="card-text">Looking for investor for 5% ettiqutte at 100,000$. </p>
      <a href="extended explore.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">uploaded 2 days ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="software-development.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup2</h5>
      <p class="card-text">A consumer software startup is a technology company focused on delivering products and/or services to individuals and/or households through programs (software) that operate on computers and/or mobile devices.</p>
      <p class="card-text">Looking for investor for new projects</p>
      <a href="extend explore 2.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">uploaded a week ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="shutterstock_382064236-632x422.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup3</h5>
      <p class="card-text">craftworks develops individual AI & software solutions for predictive quality and predictive maintenance in industrial companies.
.</p>
<p class="card-text">Looking for investor for new projects</p>
       <a href="entend explore3.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">uploaded 1 hour ago</small></p>
    </div>
  </div>
</div>
</li>
<div class="card-deck">
 <div class="card">
    <img class="card-img-top" src="alt-593ecb243e2ba-3814-35277e05978d5fa3b25fb53e60f50866@1x.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup4</h5>
      <p class="card-text"> Coronavirus: These Indian startups have raised funds despite the hardships ... Coronavirus: Foodtech startup Box8 introduces grocery delivery ...
.</p>
       <a href="extend explore4.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
   <div class="card">
    <img class="card-img-top" src="sp5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup5</h5>
      <p class="card-text"> the wedding planning business, earnings are also completely based on your clientele and the ceremonies you organize. A full-stack wedding ...
.</p>
       <a href="extend explore5.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
   <div class="card">
    <img class="card-img-top" src="how-to-be-the-best-tour-guide.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Startup6</h5>
      <p class="card-text">This Indian startup converts your smartphone into a tour guide. Imagine you're on a holiday trip to Paris, visiting the ...
.</p>
       <a href="extend explore 6.html" class="btn btn-info" role="button">Click here for more details</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
 </div>
</div>
</li>
</ul>
<footer class="footer-bs">
  <div class="row">
    <div class="col-md-3 footer-brand animated fadeInLeft">
        <h2>SinFo</h2>
          <p>One place for all Startups</p>
          <p>Find out the latest Startups posted on this page, scroll down to search old ones.Find suitable partners, or pull in investments. </p>
      </div>
    <div class="col-md-4 footer-nav animated fadeInUp">
        <h4>Go to-</h4>
        <div class="col-md-6">
              <ul class="pages">
                  <li><a href="homepage.html">HOMEPAGE</a></li>
                  <li><a href="explore.html">EXPLORE PAGE</a></li>
                  <li><a href="about.html">ABOUT</a></li>
                  
                  <li><a href="signup.html">SIGNUP NOW</a></li>
              </ul>
          </div>
        <div class="col-md-6">
              <ul class="list">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="#">Contacts</a></li>
                  
              </ul>
          </div>
      </div>
    <div class="col-md-2 footer-social animated fadeInDown">
        <h4>Follow Us</h4>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
      </div>
    <div class="col-md-3 footer-ns animated fadeInRight">
        <h4>ENQUIRY</h4>
          <p> Any Doubts feel FREE to contact us</p>
          <p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Ask...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                </span>
              </div>
           </p>
      </div>
  </div>
</footer>
</body>
</html>
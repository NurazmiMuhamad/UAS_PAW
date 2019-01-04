<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Profile Tabs - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">          
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
</head>
<body>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    h1{
      text-align: center;
    }
    header{
      background-color: black;
      
    }
    button {
  background-color: black;
  color: black;
  border: none;
  cursor: pointer;

}

button:hover, focus {
  background-color: black;
}

.dropdown {
 margin-left: 500px;
 margin-top:0;
	
}

	

.dropdown-item a {
  color: black;
  padding: 16px 16px;
  text-decoration: none;
  display: block;
}


}
.dropdown-item a:hover {background-color: #ddd;}



  </style>
</head>

<header id="header" id="home">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                 	<li><a href="{{route('jobList')}}" style="text-decoration:none">Job List</a></li>
                  <li><a href="{{route('MyjobList')}}" style="text-decoration:none">My Job</a></li>
                 	<li><a href="about-us.html" style="text-decoration:none">About Us</a></li>
                 	<li><a href="contact.html" style="text-decoration:none">Contact</a></li>
                  	<div class="dropdown show">
  						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fawaz Hutomi A</a>
  					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    					<a class="dropdown-item" href="#" style="color: black">Profile</a>
    					<div class="dropdown-divider"></div>
    					<a class="dropdown-item" href="#" style="color: black">Log out</a>
   				    	
  					</div>
				</div>
              	</ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header --><br><br><br>
    

@yield('content')

<!-- start footer Area -->		
			
			<!-- End footer Area -->		
</body></html>
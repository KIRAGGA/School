<!DOCTYPE html>
<html lang="en">
<head>
<title>School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
 
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  wid
  padding: 30px;
  text-align: center;
  font-size: 25px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 25px;
}

/* Clear floats after the columns */
.rows:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
          }
  }

/* Style the footer */
.footer {
  background-color: #bbb;
  padding: 30px;
  text-align: center;
}

section:after {
  content: "";
  display: table;
  clear: both;
}/* this is the section for aboutus photo  */


.dropdown a:hover{
  background-color: cornflowerblue;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}


/* styling for school facilities */

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

 .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 2px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }

.navbar li a, .navbar .navbar-brand {
    color: rgb(75, 69, 69) !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #ffffff !important;
    background-color: #bbb !important;
  }
  .navbar-inverse .navbar-toggle {
    border-color: rgb(155, 66, 66);
    color: rgb(255, 255, 255) !important;
  }

  .topnav {
  overflow: hidden;
  background-color: #333;
}

</style>
</head>
<body>


  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">
          <img src="{{URL::asset('/storage/images/kcoflogo.jpg')}}" alt="Image">
        </a>
      </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                        <li class="">
                          <a href="/">HOME</a>
                        </li>
                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="">ABOUT US</a>
                    <ul class="dropdown-menu">
                                <li><a href="/about-us">ABOUT THE SCHOOL</a></li>
                                <li><a href="/staff">STAFF</a></li>
                                <li><a href="/schoolfacilities">SCHOOL FACILITIES</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="/administration">ADMINISTRATION</a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">ACADEMECIS</a>
                      <ul class="dropdown-menu">
                        <li><a href="">DEPARTMENTS</a></li>
                          <ul class="dropdown-menu">
                            {{-- <li><a href="">Languages</a></li>
                            <li><a href="">Humanities</a></li>
                            <li><a href="">Science</a></li>
                            <li><a href="">Mathematics</a></li>
                            <li><a href="">Technical Department</a></li>
                            <li><a href="">Guidance & Counseling</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Library</a></li> --}}
                        </ul>
                      <li><a href="/achievements">ACHIEVEMENTS</a></li>
                      <li><a href="/schoolcurriculum">SCHOOL CURRICULUM</a></li>
                         </ul>
                  </li>
                        
                          
                  <li>
                  <a href="/admission-form">ADMISSION</a>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">CO- CURRICULAR</a>
                        <ul class="dropdown-menu">
                          <li><a href="">School Tours & Gallery</a></li>
                            <li><a href="/games">GAMES & SPORTS</a></li>
                            <li><a href="">CLUBS & SOCIETIES</a></li>
                        </ul>
                  </li>
                                       
                          <li>
                            <a href="/contact-us">CONTACT US</a>
                          </li>
            </ul>
        </div>
  </div>
</nav>


@yield('content')

<div class="rows" style="background-color:#ccc;">
  <div class="column">
    <h2>About Us</h2><hr>
    <p>This is a Secondary School is a Public Provincial mixed Boarding School in Nairobi Province.
        The school started in 1986 as a Mixed Day School but later converted to a Girls’ 
        Boarding School when the boys were relocated to Nairobi Milimani Secondary School. 
        The school population stands at 984 girls currently with 5 classes each. 
    </p>
  </div>
  

  <div class="column">
    <h2>School Direction</h2><hr>
    <div class="responsive" style="width: auto">
      <div class="gallery">
        <a target="_blank" href="#">
          <img src="{{URL::asset('/storage/images/capture.png')}}" alt="map" style="border: 1px solid rgb(185, 244, 248); padding: 3px; width: 380px;" class="w3-hover-opacity">
        </a>
        
      </div>

      {{-- <iframe src="" frameborder="0" style="border:0;" allowfullscreen="">
      
      </iframe> --}}
    </div>
  </div>

  <div class="column" style="">
    <h2>Contact Details</h2><hr>
    <p>This is a Secondary School</p>
    <p>P.O. BOX 000-0000 Nairobi, Kenya</p>
    <p>Ngongo road, Nairobi, Kenya</p>
    <p>Phone No: +254711111100</p>
    <p>Email: info@school.co.ug</p>
    <div class="w3-panel w3-large">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </div>

</div>

<div class="footer">
  <p style="text-align: left;">Copyright&copy; This is a Secondary School</p>
</div>


</body>
</html>

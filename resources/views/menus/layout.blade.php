<!DOCTYPE html>
<html lang="en">
<head>
<title>School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

.dropdown-toggle .dropdown-menu a:hover{
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

</style>
</head>
<body>


  <nav class="navbar navbar-inverse">
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
                        <li class="active"><a href="#">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About US</a>
                    <ul class="dropdown-menu">
                                <li><a href="">About the School</a></li>
                                <li><a href="">The Staff</a></li>
                                <li><a href="">School Facilities</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administration</a>
                    <ul class="dropdown-menu">
                                <li><a href="">The Management & B.O.G</a></li>
                                <li><a href="">Senior Management</a></li>
                                <li><a href="">Accounts Department</a></li>
                                <li><a href="">Secretaries</a></li>
                                <li><a href="">Stores Department</a></li>
                                <li><a href="">Boarding Department</a></li>
                                <li><a href="">Transport Department</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Departments</a></li>
                          <ul class="dropdown-menu">
                            <li><a href="">Languages</a></li>
                            <li><a href="">Humanities</a></li>
                            <li><a href="">Science</a></li>
                            <li><a href="">Mathematics</a></li>
                            <li><a href="">Technical Department</a></li>
                            <li><a href="">Guidance & Counseling</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Library</a></li>
                        </ul>
                      <li><a href="">Achievements</a></li>
                      <li><a href="">School Curriculum</a></li>
                      <li><a href="">Events</a></li>
                    </ul>
                  </li>
                        
                          
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission</a>
                    <ul class="dropdown-menu">
                      <li><a href="">Admission Form</a></li>
                      <li><a href="">Term Dates</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Co-curricular</a>
                        <ul class="dropdown-menu">
                          <li><a href="">School Tours & Gallery</a></li>
                            <li><a href="">Games & Sports</a></li>
                            <li><a href="">Clubs & Societies</a></li>
                        </ul>
                  </li>
                                       
                          <li><a href="welcome.php">Contact Us</a></li>
            </ul>
        </div>
  </div>
</nav>


@yield('content')

<div class="rows" style="background-color:#ccc;">
  <div class="column">
    <h2>About Us</h2><hr>
    <p>St. George’s Girls’ Secondary School is a Public Provincial Girls’ Boarding School in Nairobi Province.
        The school started in 1986 as a Mixed Day School but later converted to a Girls’ 
        Boarding School when the boys were relocated to Nairobi Milimani Secondary School. 
        The school population stands at 984 girls currently with 5 classes each. 
    </p>
  </div>
  

  <div class="column">
    <h2>School Direction</h2><hr>
  </div>

  <div class="column">
    <h2>Contact Details</h2><hr>
    <p>St. Georges Girls Secondary School</p>

    <br>P.O. BOX 11635-00400 Nairobi, Kenya

    <br><br>Dennis Pritt Road, Kilimani

    <p>Phone No: 020-2719857</p>

    <p>Email: info@stgeorgesgirlsnairobi.ac.ke</p>
  </div>

</div>

<div class="footer">
  <p style="text-align: left;">Copyright&copy; St. George’s Girls’ Secondary School</p>
</div>


</body>
</html>

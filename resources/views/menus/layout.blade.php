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
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
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


</style>
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#myPage">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Home</a></li>
                <li><a href="#about">About Us</a>
                      {{-- <ul>
                        <li><a href="">About the School</a></li>
                        <li><a href="">The Staff</a></li>
                        <li><a href="">School Facilities</a></li>
                      </ul> --}}
                </li>
                <li><a href="">Administration</a>
                    {{-- <ul>
                      {{-- <li><a href="">The Management & B.O.G</a></li>
                      <li><a href="">Senior Management</a></li>
                      <li><a href="">Accounts Department</a></li>
                      <li><a href="">Secretaries</a></li>
                      <li><a href="">Stores Department</a></li>
                      <li><a href="">Boarding Department</a></li>
                      <li><a href="">Transport Department</a></li>
                    </ul> --}}
                </li>
                <li><a href="">Academics</a>
                    {{-- <ul>
                      <li><a href="">Departments</a></li>
                        <ul>
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
                    </ul> --}}
                </li>
                <li><a href="#">Admissions</a>
                    {{-- <ul>
                      <li><a href="">Admission Form</a></li>
                      <li><a href="">Term Dates</a></li>
                      <li><a href="">School Fees Payment Structure</a></li>
                    </ul> --}}
                </li>
                <li><a href="#">Co-Curricular</a>
                    {{-- <ul>
                      <li><a href="">Games & Sports</a></li>
                      <li><a href="">Clubs & Societies</a></li>
                    </ul> --}}
                </li>
                <li><a href="">Resources</a>
                    {{-- <ul>
                      <li><a href="">School Tours / Gallery</a></li>
                      <li><a href="">Events</a></li>
                    </ul> --}}
                </li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
  </div>
</nav>


@yield('content')

<div class="row">
  <div class="column" style="background-color:#ccc;"><h3>About Us</h3>
    <p>St. George’s Girls’ Secondary School is a Public Provincial Girls’ Boarding School in Nairobi Province.
        The school started in 1986 as a Mixed Day School but later converted to a Girls’ 
        Boarding School when the boys were relocated to Nairobi Milimani Secondary School. 
        The school population stands at 984 girls currently with 5 classes each.
    </p>
  </div>
  <div class="column" style="background-color:#ccc;">
  <h3>Contact Details</h3>
  <p>St. Georges Girls Secondary School</p>

<br>P.O. BOX 11635-00400 Nairobi, Kenya

<br><br>Dennis Pritt Road, Kilimani

<p>Phone No: 020-2719857</p>

<p>Email: info@stgeorgesgirlsnairobi.ac.ke</p></div>
  <div class="column" style="background-color:#ccc;">Columndd</div>
</div>

<div class="footer">
  <p style="text-align: left;">Copyright&copy; St. George’s Girls’ Secondary School</p>
</div>


</body>
</html>

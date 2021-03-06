<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height"> --}}
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            @extends('menus.layout')

                @section('content')

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{URL::asset('/storage/images/nuts.png')}}" alt="Image" style="height: 400px; width:1350px">
                            <div class="carousel-caption">
                            <h3>School</h3>
                            <p>Administration</p>
                            </div>      
                        </div>


                        <div class="item">
                            <img src="{{URL::asset('/storage/images/uganda.png')}}" alt="Image" style="height: 400px; width:1350px">
                                <div class="carousel-caption">
                                <h3>KCHGHH</h3>
                                <p>thiss...</p>
                                </div>      
                        </div>


                        <div class="item">
                        <img src="{{URL::asset('/storage/images/sbgs2020.png')}}" alt="Image" style="height: 400px; width:1350px">
                            <div class="carousel-caption">
                            <h3>KCHGHH</h3>
                            <p>thiss...</p>
                            </div>      
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>

{{-- Second div about welcoming --}}
                <div><br>
                    <h2 style="text-align: center">Welcome to This is a Secondary School</h2>
                    <p style="float: left; padding: 15px;"><img src="{{URL::asset('/storage/images/capture.png')}}" 
                        alt="school" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity"></p><br>
                    <p >This is a Secondary School is a Public Provincial Girls’ Boarding School in Nairobi Province. 
                        The school started in 1986 as a Mixed Day School but later converted to a Girls’ Boarding School when the boys were 
                        relocated to Nairobi Milimani Secondary School.

                    </p>
                    <p>The school population stands at 984 girls currently with 5 classes each. Our girls are mainly from 
                        Nairobi Province but about one tenth of them are picked from the other 7 provinces. 
                        We are also hosting the UNICEF girls and Affirmative Action girls from marginalized districts. 
                        Our performance through the years has been very good in the KCSE KNEC Examinations.
                    </p>
                </div>

                {{-- the vision, mission and motto of the school --}}
                <div class="rows" style="align-items: center">
                    <br><hr>
                    <div class="column" style="text-align: center">
                        <i class="fa fa-circle-thin" style="font-size:150px; width:148px; height: 148px;" class="w3-circle w3-hover-opacity"></i>
                        <h3>Our Vision</h3>
                        <p>Our School Vision is to Be A Center of Quality Education and empower Members to greater Heights</p>
                    </div>
                    
                  
                    <div class="column" style="text-align: center">
                        <i class="fa fa-circle-thin" style="font-size:150px; width:148px; height: 148px;" class="w3-circle w3-hover-opacity"></i>
                        <h3>Our Vision</h3>
                        <p>Our School Vision is to Be A Center of Quality Education and empower Members to greater Heights</p>
                    </div>
                  
                    <div class="column" style="text-align: center">
                        <i class="fa fa-circle-thin" style="font-size:150px; width:148px; height: 148px;" class="w3-circle w3-hover-opacity"></i>
                        <h3>Our Motto</h3>
                        <p>Our School Vision is to Be A Center of Quality Education and empower Members to greater Heights</p>
                    </div>
                  
                </div>




                <div class="w3-container w3-padding-32"  id="about"><hr>
                    <h3 class="w3-padding-16" style="text-align: center">School Department</h3>
                    <p style="text-align: center; font-size: 16px">The school is divided into four departments mainly:- 
                        Languages, Humanities, Sciences and finally Mathematics Department as follows:-
                    </p>
                  </div>

                <div class="w3-row-padding w3-grayscale">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                      
                      <h3 class="w3-opacity">Languages Department</h3>
                      <p>This comprises of various languages like French, Swahili, Germany and English</p>
                      
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                                <h3 class="w3-opacity">Humanities Department</h3>
                            <p>This comprises of social arts like history, divinity and others.</p>
                        
                        </div>
                        <div class="w3-col l3 m6 w3-margin-bottom">
                            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                               <h3 class="w3-opacity">Sciences Department</h3>
                            <p>This Department comprises of Biology, physics and chemistry.</p>
                        
                        </div>
                        <div class="w3-col l3 m6 w3-margin-bottom">
                            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                                <h3 class="w3-opacity">Mathematics Department</h3>
                            <p>This comprises of 7 teachers who ensure that students get to know the Mathematics concepts.</p>
                        
                        </div>
                  </div><hr>
                
                    
                @endsection
        {{-- </div> --}}
    </body>
</html>

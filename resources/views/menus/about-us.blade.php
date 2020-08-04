@extends('menus.layout')

@section('content')


<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About the School</h1>
</header>


<div>
    
    <h2 style="text-align: center">Welcome to This is a Secondary School</h2>
    <p style="float: left; padding: 15px;"><img src="{{URL::asset('/storage/images/capture.png')}}" 
        alt="school" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity"></p><br>
    <p >St. George’s Girls’ Secondary School is a Public Provincial Girls’ Boarding School in Nairobi Province. 
        The school started in 1986 as a Mixed Day School but later converted to a Girls’ Boarding School when the 
        boys were relocated to Nairobi Milimani Secondary School. The school population stands at 1190 girls currently 
        with 6 classes each. Our girls are mainly from Nairobi County but about one tenth of them are picked from the 
        other 46 Counties. We are also hosting the UNICEF girls and Affirmative Action girls
         from marginalized districts. Our performance through the years has been very good in the KCSE KNEC Examinations.

    </p>
   
</div><br>
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

    
@endsection
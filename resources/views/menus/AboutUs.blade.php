@extends('menus.layout')

@section('content')


<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1>About the School</h1>
</header>


<div>
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
</div><br><hr>


    
@endsection
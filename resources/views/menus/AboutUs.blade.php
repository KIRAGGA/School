@extends('menus.layout')

@section('content')


<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1>About the School</h1>
</header>


<div style="-webkit-flex: 3; -ms-flex: 3; flex: 3; background-color: #f1f1f1; padding: 10px;">
    <h1>MOTTO: INTEGRITY AND KNOWLEDGE</h1>

    <p>St. George’s Girls’ Secdondary School is a Public Provincial Girls’ Boarding School in Nairobi Province. 
        The school started in 1986 as a Mixed Day School but later converted to a Girls’ 
        Boarding School when the boys were relocated to Nairobi Milimani Secondary School. 
        The school population stands at 1190 girls currently with 6 classes each. Our girls are mainly from 
        Nairobi County but about one tenth of them are picked from the other 46 Counties. 
        We are also hosting the UNICEF girls and Affirmative Action girls from marginalized districts. 
        Our performance through the years has been very good in the KCSE KNEC Examinations.
    </p>

    <p>MISSION: TO PROVIDE HOLISTIC KNOWLEDGE AND EFFECTIVELY EMPOWER MEMBERS TO GREATER HEIGHTS OF SUCCESS...</p>
    {{-- <img src="../public/storage/images/kcoflogo.jpg" alt="this is am"> --}}
    <img src="{{URL::asset('/storage/images/capture.png')}}" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 350px;">
</div>


    
@endsection
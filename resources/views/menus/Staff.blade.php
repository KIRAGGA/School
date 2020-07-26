@extends('menus.layout')

@section('content')

<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1 style="height: 100px; width: 244px">Staff</h1>
</header>

    <!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>OUR TEAM</h2>
    <p>Meet the team - our office rats:</p>
    
    <div class="w3-row"><br>
    
            <div class="w3-quarter">
                <img src="{{URL::asset('/storage/images/capture.png')}}" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 276px;" class="w3-circle w3-hover-opacity">
            <h3>Johnny Walker</h3>
            <p>Web Designer</p>
            </div>
    
            <div class="w3-quarter">
                <img src="{{URL::asset('/storage/images/capture.png')}}" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 276px;" class="w3-circle w3-hover-opacity">
            <h3>Rebecca Flex</h3>
            <p>Support</p>
            </div>
            
            <div class="w3-quarter">
            <img src="{{URL::asset('/storage/images/capture.png')}}" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 276px;" class="w3-circle w3-hover-opacity">
            <h3>Jan Ringo</h3>
            <p>Boss man</p>
            </div>
            
            <div class="w3-quarter">
                <img src="{{URL::asset('/storage/images/capture.png')}}" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 276px;" class="w3-circle w3-hover-opacity">
            <h3>Kai Ringo</h3>
            <p>Fixer</p>
            </div>
    
    </div>
</div>

    <div>
        <img src="{{URL::asset('/storage/images/nuts.png')}}" alt="Image" style="height: 400px; width:1350px">
    </div>

    
@endsection
@extends('menus.layout')

@section('content')

<div class="topnav" style=" background-color: #665; padding: 55px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 130px">
    <h1 style="height: 100px; width: 244px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staff</h1>
</div>

<div><br>
    <h2 style="text-align: center">Headteachers' message</h2>
    <p style="float: left; padding: 15px;"><img src="{{URL::asset('/storage/images/capture.png')}}" 
        alt="school" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity"></p><br>
    <p>Welcome to Our School website

        St Georges Girl’s Secondary School provides a strong, inclusive learning environment for 
        the girls at the school and this is supported by extra-curricular activities developed
         by the staff and the school community. Schools are great places where parents and
          teachers work together for our children. 
        This is reflected in our school motto: INTEGRITY AND KNOWLEDGE.
    </p>
    <p>We are very proud of our many accomplishments at St Georges Girl’s Secondary School and we invite 
        you to come and see this amazing school for yourself.
    <br>Yours faithfully,

    <br>Mr. Reagan Kayongo.
    
    <br>Headteacher
    </p>
</div><hr>

    <!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>OUR TEAM</h2>
    <p>Meet the team - our office rats:</p>

    
    <div class="w3-row">
    
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
</div><hr>

    <div>
        <img src="{{URL::asset('/storage/images/nuts.png')}}" alt="Image" style="height: 400px; width:1350px">
    </div><br>

    
@endsection
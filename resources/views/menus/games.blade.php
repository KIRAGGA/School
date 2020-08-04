@extends('menus.layout')

@section('content')

<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1 style="height: 100px; width: 244px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Games & Sports</h1>
  </header>

    <div>
        <p style="padding: 35px">For the all-round development of the students, apart from studies, 
            we have co-curricular activities. Students are encouraged for different 
            activities by their teachers like debate competition, quiz competition, 
            essay writing competition, drawing competition, public speaking, skill performance
             etc. Many educational and excursion tours are planned every year for the students.</p>    
    <div>


        <hr><div class="w3-row-padding w3-grayscale">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
              
              <h3 class="w3-opacity" style="text-align: center">football</h3>
              <p>This comprises of various languages like French, Swahili, Germany and English </p>
              
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                    <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                        <h3 class="w3-opacity" style="text-align: center">Netball</h3>
                    <p>This comprises of social arts like history, divinity and others.</p>
                
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                    <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                       <h3 class="w3-opacity" style="text-align: center">Volley ball</h3>
                    <p>This Department comprises of Biology, physics and chemistry.</p>
                
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                    <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
                        <h3 class="w3-opacity" style="text-align: center">Swimming</h3>
                    <p>This comprises of 7 teachers who ensure that students get to know the Mathematics concepts.</p>
                
                </div>
          </div><hr>

@endsection
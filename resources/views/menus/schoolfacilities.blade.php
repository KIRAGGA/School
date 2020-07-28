@extends('menus.layout')

@section('content')

<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1 style="height: 100px; width: 244px">School Facilities</h1>
</header>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  
  
  
  
  <div class="responsive"><br><br><br>
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  
  <div class="responsive"><br><br><br>
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  <div class="responsive"><br><br><br>
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  <div class="responsive"><br><br><br>
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="{{URL::asset('/storage/images/capture.png')}}" alt="Norway" style="border: 1px solid #ddd; border-radius: 2px; padding: 5px; width: 276px;" class="w3-hover-opacity">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
  <div class="clearfix"><hr></div>

  
    
@endsection
@extends('menus.layout')

@section('content')
    
<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1 style="height: 100px; width: 244px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact US</h1>
</header><br><br>

 <!-- Contact Section -->
 <div class="w3-container w3-padding-large w3-grey">
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Nairobi, Kenya</p>
      </div>
      <div class="w3-third w3-orange">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+254711111010</p>
      </div>
    </div>
    <hr class="w3-opacity">
    
    
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Contact Us</h5>
            </div>
           <div class="card-body">
              @if(Session::has('success'))
                 <div class="alert alert-success">
                 {{ Session::get('success') }}
                  </div>
              @endif
              
             <form method="post" action="">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label> Name </label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group">
                      <label> Email </label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div> 
                 <div class="col-md-12">
                    <div class="form-group">
                      <label> Subject </label>
                      <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                      @error('subject')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                 <div class="col-md-12">
                   <div class="form-group">
                      <label> Message </label>
                      <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                      @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                 <div class="update ml-auto mr-auto">
                  <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   </div>

  </div><br>

@endsection
@extends('menus.layout')

@section('content')

<header style=" background-color: #666; padding: 10px ; text-align: left; font-size: 35px; grid-area: header; color: white; height: 100px">
    <h1 style="height: 100px; width: 244px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admission Form</h1>
  </header>
    
  <p>Students can apply for admission in our school, by filling in the form below: </p>
<div>
    <form method="post" action="">
        <div class="form-body">
        
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Student Full Name">
                    <span class="field-icon"><i class="fa fa-user"></i></span>  
                </label>
            </div><!-- end section -->
            
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="text" name="senderfname" id="senderfname" class="gui-input" placeholder="Student Father Name">
                    <span class="field-icon"><i class="fa fa-user"></i></span>  
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="text" name="pschool" id="pschool" class="gui-input" placeholder="Student Previous School">
                    <span class="field-icon"><i class="fa fa-university"></i></span>
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="text" name="pclass" id="pclass" class="gui-input" placeholder="Student Previous Standard">
                    <span class="field-icon"><i class="fa fa-book"></i></span>
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                    <span class="field-icon"><i class="fa fa-envelope"></i></span>
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="tel" name="sendermobile" id="sendermobile" class="gui-input" placeholder="Enter Mobile No.">
                    <span class="field-icon"><i class="fa fa-phone"></i></span>
                </label>
            </div><!-- end section -->
            
            
            <div id="section1">
                <label class="field prepend-icon">
                    <input type="text" name="saddress" id="saddress" class="gui-input" placeholder="Enter Address">
                    <span class="field-icon"><i class="fa fa-home"></i></span>
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>   
                </label>
            </div><!-- end section -->
            
            <div id="section1">
                <div class="smart-widget sm-left sml-120">
                    <label class="field">
                        <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                    </label>
                    <label class="button captcode">
                        <img src="php/captcha/captcha.php?<?php echo time();?>" id="captchax" alt="captcha">
                        <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                    </label>
                </div><!-- end .smart-widget section --> 
            </div><!-- end section -->
            
           <div class="result"></div><!-- end .result  section --> 
                                                                                                        
        </div><!-- end .form-body section -->
        <div class="form-footer">
            <button type="submit" data-btntext-sending="Sending..." class="button btn-primary">Submit</button>
            <button type="reset" class="button"> Cancel </button>
        </div><!-- end .form-footer section -->
    </form>
</div>

@endsection
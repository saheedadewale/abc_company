
@extends('layout.app')

@section('content')
<h2>Contact Us</h2>
<p> Feel Free to contact us </p>
<div class="container">
   

    <div class="card">
        <div class="card-header">
          Contact Us
        </div>
        <div class="card-body">
         <!-- Start msg-->
         <form class="text-left" method="post" action="/contact">
            {{ csrf_field()}}
         <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter Your Name">
                </div>
                
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
                
            </div>
        </div>
    
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                </div>
                
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Preference</label>
                    <select class="form-control" name="preference" id="preference">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="">Message</label>
                   
                    <textarea class="form-control" id="message" name="message" placeholder="Enter Your Message "></textarea>
                </div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button class="btn btn-secondary"><i class="fa fa-envelope"></i> Send Message</button>
            </div>
        </div>
         <!--end msg -->
         </form>
        </div>
      </div>

</div>
@endsection


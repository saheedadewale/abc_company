@extends('layout.app')

@section('content')

<div class="container">
   

       <div class="card">
           <div class="card-header">
             Create Post
           </div>
           <div class="card-body">
            <!-- Start msg-->
            <form class="text-left" method="post" action="/posts">
               {{ csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                   <div class="form-group">
                       <label for="">Post Title</label>
                       <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                   </div>
                   
               </div>
               
           </div>
       
           
           <div class="row">
               <div class="col-lg-12">
                   <div class="form-group">
                       <label for="">Post Body</label>
                      
                       <textarea class="form-control" id="body" name="body" placeholder="Enter Your Post "></textarea>
                   </div>
                   
               </div>
               
           </div>
           <div class="row">
               <div class="col-lg-6">
                   <button class="btn btn-secondary"><i class="fa fa-plus"></i> Add Post</button>
               </div>
           </div>
            <!--end msg -->
            </form>
           </div>
         </div>
   
   </div>

   
@endsection






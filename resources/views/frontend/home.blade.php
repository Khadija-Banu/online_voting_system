@extends('master')
@section('content')

<div class="container">
    <div class="card-group">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <img src="{{asset('storage/users/'.  Auth::user()->image)}}" style=" height:220px"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Name: {{ Auth::user()->name }}</h5>
                      <p class="card-text">Email: {{ Auth::user()->email }}</p>
                      <p class="card-text">Phone No: {{ Auth::user()->phone }}</p>
                      <p class="card-text">City: {{ Auth::user()->city }}</p>
                      <p class="card-text">Gender: {{ Auth::user()->gender }}</p>
                      <a href="" class="btn btn-sm btn-danger">Unvote</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-8 col-md-8 ">
                <div class="row ms-5">
                    
                      @foreach ($votes as $vote)
                      <div class="col-lg-3 col-md-3">
                        <div class="card">
                            <img src="{{asset('storage/votes/'. $vote->vote_image)}}"height="100px"width="150px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$vote->vote_name}}</h5>
                            
                              <a href="" class="btn btn-sm btn-primary">Vote Now</a>
                            </div>
                          </div> 
                        </div>
                          @endforeach
                   
                 
                </div>
               
            </div>
        </div>
     
       
        </div>
      
        </div>
 
    
@endsection
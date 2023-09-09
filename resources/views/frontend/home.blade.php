@extends('master')
@section('content')

<div class="container">
    <div class="card-group">
        <div class="row">
         
            <div class="col-lg-4 col-md-4">
              <form action="{{route('details_store')}}" method="POST">
                @csrf
                <div class="card">
                    <img src="{{asset('storage/users/'.  Auth::user()->image)}}" style=" height:250px"class="card-img-top" alt="...">
                    <div class="card-body">

                      <input type="text"name="name" hidden value="{{ Auth::user()->name }}">
                      <h5 class="card-title" >Name: {{ Auth::user()->name }}</h5>

                      <input type="text"name="email" hidden value="{{ Auth::user()->email }}">
                      <p class="card-text" >Email: {{ Auth::user()->email }}</p>


                      <input type="text"name="phone" hidden value="{{ Auth::user()->phone }}">
                      <p class="card-text" >Phone No: {{ Auth::user()->phone }}</p>


                      <input type="text"name="city" hidden value="{{ Auth::user()->city }}">
                      <p class="card-text" >City: {{ Auth::user()->city }}</p>


                      <input type="text"name="gender" hidden value="{{ Auth::user()->gender }}">
                      <p class="card-text" >Gender: {{ Auth::user()->gender }}</p>
              
                      {{-- <p class="card-text" >Status: <input type="text"name="status" value="{{$vote->vote_name}}" > </p> --}}
                      <p> <select class="form-select" name="vote_id" onchange="myFunction()">
                        <option value="">No Vote</option>
                        @foreach ($votes as $vote)
                        <option value="{{$vote->id}}" >{{$vote->vote_name}}</option>
                        @endforeach             
                      </select></p>
                  
                      @error('vote_id')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <button type="submit" class="btn btn-sm btn-success">Save</button> 
                    </div>
                  </div>

                </form>
            </div>
          
            <div class="col-lg-8 col-md-8 ">
                <div class="row">
                    
                      @foreach ($votes as $vote)
                      <div class="col-lg-4 col-md-3">
                        <div class="card">
                            <img src="{{asset('storage/votes/'. $vote->vote_image)}}"height="100px"width="150px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$vote->vote_name}}</h5>
                            </div>
                          </div> 
                        </div>
                          @endforeach
                   
                 
                </div>
               
            </div>
        </div>
     
       
        </div>
      
        </div>

        
        <script>
          function myFunction() {
            var x = document.querySelector("p > select");
            x.style.backgroundColor = "green";
            x.color="white";
  
           
          }
          </script>

@endsection

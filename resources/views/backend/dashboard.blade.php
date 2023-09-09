@extends('backend.master')
@section('content')
<div class="container" style="margin-left: 300px">
<div class="container">

    @foreach ($votes as $vote)
        @php
        $counts=$vote->count();
        @endphp
    @endforeach
    @foreach ($users as $user)
    @php
    $countsuser=$user->count();
    @endphp
@endforeach
    <div class="row">
         
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <img src="user.png" style=" height:220px"class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Total User: {{$countsuser}}</h5>
              
                </div>
              </div>
        </div>
      
        <div class="col-lg-4 col-md-4 ">
            <div class="card">
                <img src="votelogo.png"height="220px"width="150px" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Total Vote: {{$counts}}</h5>
                </div>
            </div>
           
        </div>
    </div>
 
   

    
</div>
</div>
@endsection
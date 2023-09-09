@extends('backend.master')
@section('content')
<div class="container" style="margin-left: 300px">

        <div class="card">    
            <div class="card-body m-4">
              <h3 >Voter Details  </h3>
              <table class="table" >
                    <thead >
                      <tr>
                        <th style="color:rgba(70,99,202,255)">Ser No</th>
                        <th style="color:rgba(70,99,202,255)">Name</th>
                        <th style="color:rgba(70,99,202,255)">Email</th>
                        <th style="color:rgba(70,99,202,255)">Phone</th>    
                        <th style="color:rgba(70,99,202,255)">City</th>
                        <th style="color:rgba(70,99,202,255)">Gender</th>   
                        <th style="color:rgba(70,99,202,255)">Status</th>       
                      </tr>
                    </thead>
                    <tbody>
                     @php
                       $i=1  
                     @endphp
                      @foreach ($vote_details as $vote_detail)           
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$vote_detail->name}}</td>
                        <td>{{$vote_detail->email}}</td>
                        <td>{{$vote_detail->phone}}</td>
                        <td>{{$vote_detail->city}}</td>
                        <td>{{$vote_detail->gender}}</td>
                        <td>{{$vote_detail->vote->vote_name?? ''}}</td>
                      </tr>   
                      @endforeach
                    </tbody>
                </table>
    
                     {{-- pegination link show --}}
          
            </div>
          </div> 
        
</div>
@endsection
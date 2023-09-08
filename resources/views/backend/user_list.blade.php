@extends('backend.master')
@section('content')
<div class="container" style="margin-left: 300px">

        <div class="card">    
            <div class="card-body m-4">
              <h3 >User List  </h3>
              <table class="table" >
                    <thead >
                      <tr>
                        <th style="color:rgba(70,99,202,255)">Ser No</th>
                        <th style="color:rgba(70,99,202,255)">Name</th>
                        <th style="color:rgba(70,99,202,255)">Email</th>
                        <th style="color:rgba(70,99,202,255)">Email</th>           
                      </tr>
                    </thead>
                    <tbody>
                     @php
                       $i=1  
                     @endphp
                      @foreach ($users as $user)           
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          @if(file_exists(storage_path().'/app/public/users/'.$user->image) &&(!is_null($user->image)))
                          <img src="{{asset('storage/users/'. $user->image)}}"height="100px"width="150px">
                          @else         
                          {{-- <img src="{{asset('storage/categories/default.jpg')}}"height="100px" width="150px"> --}}
                          @endif
                        </td>   
                      </tr>   
                      @endforeach
                    </tbody>
                </table>
    
                     {{-- pegination link show --}}
                     {{ $users->links() }} 
            </div>
          </div> 
        
</div>
@endsection
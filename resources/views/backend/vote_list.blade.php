@extends('backend.master')
@section('content')
<div class="container" style="margin-left: 300px">
    <div class="card">    
        <div class="card-body m-4">
          <h3 >Vote List <a class="btn btn-sm btn-success" style="margin-left: 20px" href="{{route('vote_create')}}">Add New Vote</a> </h3>
          <table class="table" >
                <thead >
                  <tr>
                    <th style="color:rgba(70,99,202,255)">Ser No</th>
                    <th style="color:rgba(70,99,202,255)">Name</th>
                    <th style="color:rgba(70,99,202,255)">Image</th>
                    <th style="color:rgba(70,99,202,255)">Actions</th>  
                                
                  </tr>
                </thead>
                <tbody>
                 @php
                   $i=1  
                 @endphp
                  @foreach ($votes as $vote)           
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$vote->vote_name}}</td>
                    <td>
                        @if(file_exists(storage_path().'/app/public/votes/'.$vote->vote_image) &&(!is_null($vote->vote_image)))
                        <img src="{{asset('storage/votes/'. $vote->vote_image)}}"height="100px"width="150px">
                        @else         
                        {{-- <img src="{{asset('storage/categories/default.jpg')}}"height="100px" width="150px"> --}}
                        @endif
                      </td>
                    
                      <td>
                        <a class="btn btn-sm btn-warning" href="{{route('vote_edit',$vote->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{route('vote_delete',$vote->id)}}">Delete</a>
                      </td>   
                  </tr>   
                  @endforeach
                </tbody>
            </table>

                 {{-- pegination link show --}}
                 {{ $votes->links() }} 
        </div>
      </div> 
</div>
@endsection
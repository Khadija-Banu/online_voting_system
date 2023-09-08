@extends('backend.master')
@section('content')
<div class="container" style="margin-left: 300px">
    <div class="card">
        <div class="card-body m-4 ">
        <h3 style="color:rgba(55,180,236,255)">Create Vote</h3>
            
        <form action="{{route('vote_store')}}" method="post" class="mt-4" enctype="multipart/form-data">
            @csrf
                <div class="form-group mt-2">
                    <input class="form-control" type="text " name="vote_name" value="{{old('vote_name')}}" placeholder="vote name">
    
                    @error('vote_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                <div class="form-group mt-2">
                    <input type="file" name="vote_image" class="form-control" value="{{old('vote_image')}}" >
    
                    @error('vote_image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
</div>
@endsection
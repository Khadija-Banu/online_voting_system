<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vote;

use Illuminate\Support\Carbon;
use Image;

class VoteController extends Controller
{
    //
    public function dashboard(){
        $votes=Vote::all();
        $users=User::all(); 
        return view ('backend.dashboard',compact('votes','users'));
    }

  

    public function home(){
        
        $votes=Vote::all();
        return view ('frontend.home',compact('votes'));
    }
    public function userIndex(){
        $users=User::paginate(4);
        return view ('backend.user_list',compact('users'));
    }

    public function voteIndex(){
        $votes=Vote::paginate(4);
        return view ('backend.vote_list',compact('votes'));
    }


    public function voteCreate(){
        return view ('backend.vote_create');
    }


    public function voteStore(Request $request){
        try{
   
     $data=$request->all();
     if($request->vote_image){
         $image=$this->UploadImage($request->vote_name,$request->vote_image);
     }
    
     $data['vote_image']=$image;
   
     Vote::create($data);
     return redirect()->route('vote_list');
    }
    catch(Exception $e){
     return redirect()-route('vote_create')->withMessage($e->getMessage());
    }
 }


 public function voteEdit($id){
    $vote=Vote::find($id);
    return view ('backend.vote_edit',compact('vote'));
}

public function voteUpdate(Request $request,$id){

    try{
        $data=$request->except('_token');

        if($request->hasFile('vote_image')){
            $vote=Vote::where('id',$id)->first();
            $this->unlink($vote->vote_image);
            $data['vote_image']=$this->UploadImage($request->vote_name,$request->vote_image);
        }
        Vote::where('id', $id)->update($data);
        return redirect()->route('vote_list');
    }catch(Exception $e){
        dd($e->getMessage());
    }  
}

 //Individual vote delete
 public function voteDelete($id){
    $data=Vote::find($id);
    $data->delete();
    return redirect()->back();
    
}


  //Image upload function
  public function UploadImage($vote_name,$vote_image){
    $timestamp=str_replace([' ',':'],'-',Carbon::now()->toDateTimeString());
    $file_name=$timestamp . '-'.$vote_name. '.' .$vote_image->getClientOriginalExtension();
    $pathToUpload=storage_path().'/app/public/votes/';

    if(!is_dir($pathToUpload)){
     mkdir($pathToUpload, 0755, true);

    }
    Image::make($vote_image)->resize(634,792)->save($pathToUpload.$file_name);
    return $file_name;
 }

 //Image update then previous image delete in storage folder
 private function unlink($vote_image){
     $pathToUpload=storage_path().'/app/public/votes/';
     if($vote_image != '' && file_exists($pathToUpload.$vote_image)){
         @unlink($pathToUpload.$vote_image);
     }
 }
   
}

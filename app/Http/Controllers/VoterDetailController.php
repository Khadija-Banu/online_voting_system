<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VoterDetailRequest;
use App\Models\VoterDetail;

class VoterDetailController extends Controller
{
    public function voterDetail(){
        $vote_details=voterDetail::all();
       
        return view('backend.voter_details',compact('vote_details'));
    }
  
    public function store(VoterDetailRequest $request){
      
        try{
            $data=$request->all();
      

           
            VoterDetail::create($data);
            return redirect()->route('home');
        }

       catch(Exception $e){
     return redirect()->route('home')->withMessage($e->getMessage());
    }
    }
}

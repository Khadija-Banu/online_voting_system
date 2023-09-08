<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Carbon;
use Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
      
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if($request->image){
            $image=$this->UploadImage($request->name,$request->image);
        }
       
        // $data['vote_image']=$image;
      


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'gender' => $request->gender,
            'image' => $image,
            'password' => Hash::make($request->password),
        ]);
        // dd($request->image);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    //Image upload function
  public function UploadImage($name,$image){
    $timestamp=str_replace([' ',':'],'-',Carbon::now()->toDateTimeString());
    $file_name=$timestamp . '-'.$name. '.' .$image->getClientOriginalExtension();
    $pathToUpload=storage_path().'/app/public/users/';

    if(!is_dir($pathToUpload)){
     mkdir($pathToUpload, 0755, true);

    }
    Image::make($image)->resize(634,792)->save($pathToUpload.$file_name);
    return $file_name;
 }

 //Image update then previous image delete in storage folder
 private function unlink($image){
     $pathToUpload=storage_path().'/app/public/users/';
     if($image != '' && file_exists($pathToUpload.$image)){
         @unlink($pathToUpload.$image);
     }
 }
   
}

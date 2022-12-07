<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;
use Exception;

class LinkedinController extends Controller
{
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleLinkedinCallback()
    {
        try {
        
            $user = Socialite::driver('linkedin')->user();
            // $finduser = User::where('facebook_id', $user->id)->first();
            $finduser = Social::where('service_id', $user->id)->first();
            $emailUser = User::where('email', $user->email)->first();
            if($finduser){
         
                Auth::login(User::find($finduser->user_id));
       
                return redirect()->intended('dashboard');
         
            }
            else if($emailUser)
            {
                Social::create([
                    'user_id' => $emailUser->id,
                    'service' => 'Linkedin',
                    'service_id' => $user->id
                ]);
        
                Auth::login($emailUser);
        
                return redirect()->intended('dashboard');
            }
            else{
                $path = 'users/'.$user->id.'/avatar.jpg';
                Storage::disk('public')->put($path, file_get_contents($user->avatar_original));
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'password' => encrypt($user->id),
                    'avatar' => $user->avatar_original
                ]);
                Social::create([
                    'user_id' => $newUser->id,
                    'service' => 'Linkedin',
                    'service_id' => $user->id
                ]);
        
                Auth::login($newUser);
        
                return redirect()->intended('dashboard');
            }
       
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function home(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function destinations(){
        return view('front.destinations');
    }

    
    public function destination(){
        return view('front.destination');
    }
    public function packages(){
        return view('front.packages');
    }

    public function teamMembers(){
        return view('front.team-members');
    }

    public function teamMember(){
        return view('front.team-member');
    }

    
    public function faq(){
        return view('front.faq');
    }

    public function blog(){
        return view('front.blog');
    }


    public function post(){
        return view('front.post');
    }


    public function category(){
        return view('front.category');
    }


    public function contact(){
        return view('front.contact');


    }
    public function login(){
        return view('front.login');
    }
    public function forgetpassword(){
        return view('front.forget-password');
    }


    public function register(){
        return view('front.register');
    }
    public function register_submit(Request $req){

        $token = hash('sha256',time());

        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'retype_password' => 'required|same:password',
        ]);

        $user = New User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->token = $token;
        $user->save();

        $verification_link = route('register_email_verify',[
            'email' => $req->email,
            'token'=> $token]);

        $subject = 'User Account Verification';
        $message = 'Please click the following linkt to verify your email address:<br>
        <a href="'.$verification_link.'">Verify Email</a>';
        
        \Mail::to($req->email)->send(New WebsiteMail($subject,$message));
        
        return redirect()->back()->with('success', '
        Registration successful! But you have to verify your email.
        So please check your email and verify it.');
        

    }


    public function terms(){
        return view('front.terms');
    }


    public function privacy(){
        return view('front.privacy');
    }

}





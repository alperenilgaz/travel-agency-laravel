<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function forgetpassword(){
        return view('front.forget-password');
    }

    public function forget_password_submit(Request $req){

        $req->validate([
            'email' => ['email','required'],
        ]);

        $user = User::where('email',$req->email)->first();

        if(!$user){
            return redirect()->back()->with('error','Email is Not Found!');
        }

        $token = hash('sha256',time());
        $user->token = $token;
        $user->update();

        $reset_link = url('reset-password'.'/'.$token.'/'.$req->email);
        $subject = "Password Reset";
        $message = 'To reset password, please click on the link below :<br>';
        $message = "<a href='".$reset_link."'>Click Here</a>";

        \Mail::to($req->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','We have sent a password reset link to your email. Please check your email. If ypı do not find the email in your inbox, please check your spam folder.');

    }


    public function login(){
        return view('front.login');
    }
    
    public function login_submit(Request $req){
        $req->validate([
            'email' => ['email','required'],
            'password' => ['required'],
        ]);


        $check = $req->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        if(Auth::guard('web')->attempt($data)){
            
            return redirect()->route('user_dashboard')->with('success','Login was Succesful');
        } else {
            return redirect()->route('login')->with('error','Wrong Email or password')->withInput();
        }
    }

        public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success','Logout is succesful');
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

        $verification_link = route('register_email',[
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
    public function reset_password($token,$email){
        $user = User::where('email',$email)->where('token',$token)->first();
        if(!$user){
            return redirect()->route('login')->with('error','Token or email is not correct');
        } 

        return view('front.reset-password',compact('email','token'));
    }


    public function reset_password_submit(Request $req){
    $req->validate([
        'password' => ['required'],
        'confirm_password' =>  ['required','same:password'],
    ]);

    $user = User::where('email', $req->email)->where('token', $req->token)->first();

    if (!$user) {
        return redirect()->route('login')->with('error','Token or email is not correct');
    }

    $user->password = Hash::make($req->password);
    $user->token = '';
    $user->save();

    return redirect()->route('login')->with('success','Password reset is successful. You can login now');
}

    public function register_verify($email,$token){
         
        $user = User::where('token',$token)->where('email',$email)->first();
        if(!$user){
            return redirect()->route('login');
        }
        $user->token = '';
        $user->status = 1;
        $user->update();

        return redirect()->route('login')->with(
            'success',
            'Your email is verified. You can login now.'
        );
    }


    public function terms(){
        return view('front.terms');
    }


    public function privacy(){
        return view('front.privacy');
    }

 
}





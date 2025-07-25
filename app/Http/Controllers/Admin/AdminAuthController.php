<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\Websitemail;


class AdminAuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
            'status' => 1,
        ];
    
        if(Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin_dashboard')->with('success','Login is successful!');
        } else {
            return redirect()->route('admin_login')->with('error','The information you entered is incorrect! Please try again!');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success','Logout is succesful!');
    }

    public function forget_password_submit(Request $req)
    {
        $req->validate([
            'email' => ['required','email'],
        ]);
        $admin = Admin::where('email',$req->email)->first();
        if(!$admin){
            return redirect()->back()->with('error','Email is not Found');
        }

        $token = hash('sha256',time());
        $admin->token = $token;
        $admin->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$req->email);
        $subject = 'Password Reset';
        $message = 'To reset password, please click on the link below :<br>';
        $message = "<a href='".$reset_link."'>Click Here</a>";

        \Mail::to($req->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','We have sent a password reset link to your email. Please check your email. If ypı do not find the email in your inbox, please check your spam folder.');
    }

    public function forget_password(){
        return view('admin.forget-password');
    }

    public function reset_password($token, $email)
    {
        $admin = Admin::where('email',$email)->where('token',$token)->first();
        if(!$admin)
        {
            return redirect()->route('admin_login')->with('error','Token or email is not correct');
        }
        return view('admin.reset-password',compact('token','email'));
    }

    public function reset_password_submit(Request $req,$token,$email){
        $req->validate([
            'password' => ['required'],
            'confirm_password' => ['required','same:password'],
        ]);
        $admin = Admin::where('email',$req->email)->where('token',$req->token)->first();
        $admin->password = Hash::make($req->password);
        $admin->token = '';
        $admin->update();
        return redirect()->route('admin_login')->with('success','Password reset is successful. You can login now');
    }

    
    public function profile()
    {
        return view('admin.profile');
    }


    public function profile_submit(Request $req)
    {
        $req->validate([
            'name' => ['required'],
            'email' => ['required','email'],
        ]);

        $admin = Auth::guard('admin')->user(); // Zaten giriş yapan admini diretk getirir.        

        if($req->hasFile('photo')){
            $req->validate([
                'photo' => ['mimes:jpg,jpeg,png,gif','max:2024'],
            ]);
            $final_name = 'admin_'.time().'.'.$req->photo->extension();
            $req->photo->move(public_path('uploads'),$final_name);
            unlink(public_path('uploads/'.$admin->photo));
            $admin->photo = $final_name;
        }

        if($req->password){
            $req->validate([
                'password' => ['required'],
                'confirm_password' => ['same:password','required'],
            ]);

            $admin->password = Hash::make($req->password);
        }

        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->update();

        return redirect()->back()->with('success','Profile is updated!');
    }




}

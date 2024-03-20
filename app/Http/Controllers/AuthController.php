<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register_form(){
        return view('auth.register');
    }


    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required',
            'phone_no' => 'required'
        ]);

        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->userType = 'user';
        $User->phone_no = $request->phone_no;
        $User->save();

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login.form')->with('error_msg', 'Registration Failed');
        }
    }


    public function login_form()
    {
            return view('auth.login');
    }




    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard.home')->with('success', 'You have successfully logged in!');
        }

        return back()->with('error_msg', 'Your provided credentials do not match in our records.')->onlyInput('email');

    }


    public function logout()
    {
        Auth::logout();
        // session()->flush();
        return redirect()->route('login.form');
    }


    public function change_password_form()
    {
        if (Auth::check()) {
            return view('auth.change_password');
        } else {
            return redirect()->route('login.form');
        }
    }


    public function change_password(Request $request)
    {

        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'confirmed', 'string']
        ]);

        $ChangepasswordStatus = Hash::check($request->current_password, Auth::user()->password);
        if ($ChangepasswordStatus) {

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('change_password')->with('success', 'Change Password Successfully ');
        } else {
            return redirect()->route('change_password')->with('error', 'Something Went Wrong');
        }
    }

    public function profile_update_form()
    {
        if (Auth::check()) {
            $data = Auth::user();
            return view('auth.profile_update', compact('data'));
        } else {
            return redirect()->route('login.form');
        }
    }

    public function profile_update(Request $request)
    {

        if (Auth::check()) {
            User::findOrFail(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_no' => $request->phone_no
            ]);
            return redirect()->route('profile.update')->with('success', 'Profile Update Successfully');
        } else {
            return redirect()->route('login.form');
        }
    }
}

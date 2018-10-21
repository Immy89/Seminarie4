<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use App\User;

class setupCtrl extends Controller
{
    public function index()
    {
        return view('Welcome');
    }

    public function loggaIn()
    {
        return view('loggaIn');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/'); 
            //Tillbaka till startsidan (Welcome) med nya behörigheter eftersom inloggningen lyckades.
        }
        else
        {
            return back()->with('error', 'Wrong Login Details.');
        }
    }

    public function logout()
    {
        Auth::logout();
        //return redirect('login');
        return back();
    }

    public function registerForm()
    {
        return view('registrera');
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'email'             =>  'required|email|unique:users,email',
            'username'          =>  'required|alphaDash',
            'password'          =>  'required|alphaNum|min:8',
            'passwordRepeat'    =>  'required|same:password'
        ]);

        $user = new User();
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = str_random(10);

        $user->save();

        return redirect('/login'); 
    }

    public function SidanUnderUppbyggnad()
    {
        return view('SidanUnderUppbyggnad');
    }
}
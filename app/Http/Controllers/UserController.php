<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function viewsignup()
    {
        return view('signup');
    }
    public function dosignup(Request $request)
    {

        $newuser = new User();
        $newuser->name = $request->get('name');
        $newuser->email = $request->get('email');
        $newuser->mobile = $request->get('mobile');
        $newuser->password = $request->get('password');

        $newuser->save([$newuser->name, $newuser->email, $newuser->email, $newuser->password]);
        return redirect()->to('/login');
    }
    public function register(Request $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function viewlogin()
    {
        return view('login');
    }

    public function dologin(Request $request)
    {
        $users = DB::table('users')->select('id', 'name', 'mobile', 'email', 'password')->get()->where('name', '=', $request->name);
        $message = "";
        if ($users->count()) {
            return redirect('/global')->with('success', "Account successfully registered.");
        } else {
            return Redirect::back()->with(['error', 'Login Failed']);
        }

        // return view('some-view')->with('users', $users);
        return $message;
        // return $users;
        // dd($users);
    }
}

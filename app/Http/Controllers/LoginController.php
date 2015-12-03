<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\login_validate;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create()
    {
    return view('Login');
    }

   public function store(login_validate $request)
    {
        $request->all();
        $user = $request->get('un');
        $pass = $request->get('password');

        if (Auth::attempt(['Username' => $user, 'password' => $pass])) {
        session(['User' => $user]);
        session(['id' => Auth::id()]);

        return redirect('/Userhome');

        } else {        
        return redirect('/Login');

        }
        
}
}
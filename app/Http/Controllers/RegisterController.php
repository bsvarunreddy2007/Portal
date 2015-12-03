<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Registration_validate;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function create()
    {
    return view('Register');
    }

    public function store(Registration_validate $request)
    {
        $request->all();
        $User1 = new User(array(
        'First_name' => $request->get('fn'),
        'Last_name' => $request->get('ln'),
        'Username' => $request->get('un'),
        'password' => bcrypt($request->get('ps')),
        'Mobile_number' => $request->get('mn'),

    ));

    $User1->save();

    return redirect('/Login');

}

    }


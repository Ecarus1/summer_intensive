<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Directors;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request) {
        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($validate);
        //$user = Directors::create($validate);
        // $director = new Directors();
        // $director->name = $request->input('name');
        // $director->password = $request->input('password');


        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.registration'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}

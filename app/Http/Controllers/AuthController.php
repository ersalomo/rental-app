<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Jobs\VerifyEmail;

class AuthController extends Controller
{
    public function sign_up(Request $req)
    {
        // $validator = Validator::make($req->all(), [
        //     'nmae' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ], [
        //     'name.required' => 'Masukkan  nama Anda',
        //     'email.required' => 'Masukkan alamat email',
        //     'password.required' => 'Masukkan password',
        // ]);
        // if (!$validator->passes()) {
        // }
        $validate = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::create($validate);
        if ($user) {
            VerifyEmail::dispatch($user);
            return to_route('main.main');
        }
        return to_route('/');
    }
    public function sign_in(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Masukkan email Anda',
            'password.required' => 'Masukkan password Anda'
        ]);
        if (Auth::attempt($validate,)) {
            return to_route('main.main');
        }
        return to_route('sign-in')->with('fail', 'This credentials does\'nt match to our record');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->flush();
        return to_route('sign-in');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\User;

class HomeController extends Controller
{
    public function login(){
        $login = User::all();

        return view('login', compact('login'));
    }

    public function forgot(){
        return view('forgot');
    }

    public function register(){
        return view('register');
    }

    public function create_user(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/');
    }

    public function main(){
        $resep = Resep::all();
        return view('main', compact('resep'));
    }

    public function add(){
        return view('add');
    }

    public function recipe(Request $request){
        Resep::create([
            'judul' => $request->title,
            'deskripsi' => $request->describe,
            'alat_bahan' => $request->tools,
            'langkah' => $request->step,
            'gambar' => $request->image
        ]);
        return redirect('/main');
    }
}

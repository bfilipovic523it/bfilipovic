<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login() {
        return view("auth.login");
    }

    public function storeLogin(Request $request) {
        if(empty($request->email) or empty($request->password)) {
            return redirect()->route("login")->with("Sva polja moraju biti popunjena!");
        }

        if(Auth::attempt($request->only("email", "password"))) {
            return redirect()->route("public.pocetna");
        }

        return redirect()->route("login")->with("Podaci za logovanje nisu validni!");
    }

    public function register() {
        return view("auth.register");
    }

    public function storeRegister(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4",
        ]);

        $userRole = Role::where("naziv", "user")->first();

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "role_id" => $userRole->id,
        ]);

        return redirect()->route("admin.listusers")->with("success", "Registracija je uspesna!");
    }

    public function notAuth() {
        return view("auth.not-auth");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("login");
    }
}

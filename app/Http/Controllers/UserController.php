<?php

namespace App\Http\Controllers;

use App\Models\Prijava;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function profil() {
        $user = Auth::user();

        $prijave = Prijava::with('obuka')->where('user_id', auth()->id())->get();
        return view('public.profil', compact('user', 'prijave'));
    }

    public function users() {
        $users = User::with('role')->get();
        return view('admin.listusers', [
            "users" => $users,
        ]);
    }

    public function deleteUser($id) {
        return view("admin.deleteuser", [
            "id" => $id,
        ]);
    }

    public function destroyUser($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(url("/admin-users"))->with("success", "Korisnik je uspešno obrisan!");
    }

    public function editUser($id) {
        $user = User::findOrFail($id);
        return view("admin.edituser", [
            "user" => $user,
        ]);
    }

    public function updateUser(Request $request, $id) {
        if(empty($request->name) or empty($request->email)) {
            return redirect()->back()->with("error", "Sva polja moraju biti popunjena!");
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect(url('/admin-users'))->with("success", "Korisnik je uspešno izmenjen!");
    }
}

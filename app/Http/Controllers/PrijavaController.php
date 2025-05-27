<?php

namespace App\Http\Controllers;

use App\Models\Prijava;
use App\Models\Obuka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrijavaController extends Controller
{
    //

    public function createPublic() {
        $obuke = Obuka::all();
        return view('public.prijava', compact('obuke'));
    }

    public function storePublic(Request $request) {
        $request->validate([
            'obuka_id' => 'required|exists:obukas,id',
        ]);

        $obuka = Obuka::findOrFail($request->obuka_id);
        $ukupna_cena = $obuka->cena;

        Prijava::create([
            'user_id' => Auth::id(),
            'obuka_id' => $request->obuka_id,
            'ukupna_cena' => $ukupna_cena,
        ]);

        return redirect()->route('public.profil')->with("success", "Uspešno ste se prijavili na obuku!");
    }

    public function destroy($id) {
        $prijava = Prijava::findOrFail($id);

        $prijava->delete();

        return redirect()->back()->with('success', 'Obuka je odjavljena!');
    }
}

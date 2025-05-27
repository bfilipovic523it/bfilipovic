<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Obuka;
use Illuminate\Http\Request;

class ObukaController extends Controller
{
    public function index() {
        $sve_obuke = Obuka::all();
        return view("public.pocetna", [
            "obuke" => $sve_obuke
        ]);
    }

    public function kontakt() {
        return view("public.kontakt");
    }

    public function ponuda() {
        return view("public.ponuda", [
            "obuke" => Obuka::all(),
        ]);
    }

    public function single($id) {
        $obuka = Obuka::find($id);
        return view("public.single", [
            "obuka" => $obuka,
        ]);
    }

    public function adminindex() {
        return view("admin.index");
    }

    public function obuke() {
        return view("admin.listobuke", [
            "obuke" => Obuka::with('kategorija')->get(),
            "kategorije" => Kategorija::all()
        ]);
    }

    public function addObuka() {
        $kategorije = Kategorija::all();
        return view("admin.addobuka", [
            "kategorije" => $kategorije
        ]);
    }

    public function storeObuka(Request $request) {
        if(empty($request->naziv) or empty($request->opis) or empty($request->cena) or empty($request->slika) or empty($request->kategorija_id)) {
            return redirect()->back()->with("error", "Sva polja moraju biti popunjena!");
        }

        $slikaNaziv = null;
        if ($request->hasFile('slika')) {
            $slika = $request->file('slika');
            $slikaNaziv = 'images/' . uniqid() . '.' . $slika->getClientOriginalExtension();
            $slika->move(public_path('images'), basename($slikaNaziv));
        }

        Obuka::create([
            'naziv' => $request->naziv,
            'opis' => $request->opis,
            'cena' => $request->cena,
            'slika' => $slikaNaziv,
            'kategorija_id' => $request->kategorija_id,
            'istaknuta' => $request->has('istaknuta') ? 1 : 0,
        ]);

        return redirect(url('/admin-obuke'))->with("success", "Obuka je uspešno dodata!");

    }

    public function deleteObuka($id) {
        return view("admin.deleteobuka", [
            "id" => $id,
        ]);
    }

    public function destroyObuka($id) {
        $obuka = Obuka::findOrFail($id);
        $obuka->delete();

        return redirect(url("/admin-obuke"))->with("success", "Obuka je uspesno obrisana!");
    }

    public function editObuka($id) {
        $obuka = Obuka::find($id);
        $kategorije = Kategorija::all();
        return view("admin.editobuka", [
            "obuka" => $obuka,
            'kategorije' => $kategorije, 
        ]);
    }

    public function updateObuka(Request $request, $id) {
        if(empty($request->naziv) or empty($request->opis) or empty($request->cena) or empty($request->kategorija_id)) {
            return redirect()->back()->with("error", "Sva polja moraju biti popunjena!");
        }

        $obuka = Obuka::find($id);
        if ($request->hasFile('slika')) {
            if ($obuka->slika && file_exists(public_path($obuka->slika))) {
                unlink(public_path($obuka->slika));
            }
    
            $slika = $request->file('slika');
            $slikaNaziv = 'images/' . uniqid() . '.' . $slika->getClientOriginalExtension();
            $slika->move(public_path('images'), basename($slikaNaziv));
            $obuka->slika = $slikaNaziv;
        }

        $obuka->naziv = $request->naziv;
        $obuka->opis = $request->opis;
        $obuka->cena = $request->cena;
        $obuka->kategorija_id = $request->kategorija_id;
        $obuka->istaknuta = $request->has('istaknuta') ? 1 : 0;
        $obuka->save();

        return redirect(url("/admin-obuke"))->with("success", "Obuka je uspešno izmenjena!");
    }
}

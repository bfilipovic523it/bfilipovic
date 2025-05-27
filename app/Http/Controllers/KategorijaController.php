<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    //
    public function kategorije() {
        return view("admin.listkategorije", [
            "kategorije" => Kategorija::all(),
        ]);
    }

    public function addKategorija() {
        return view("admin.addkategorija");
    }    

    public function storeKategorija(Request $request) {
        if(empty($request->naziv)) {
            return redirect()->back()->with("error", "Naziv kategorije mora biti popunjen!");
        }

        Kategorija::create([
            "naziv" => $request->naziv,
        ]);

        return redirect(url('/admin-kategorije'))->with('success', "Nova kategorija je uspešno dodata!");
    }

    public function deleteKategorija($id) {
        return view("admin.deletekategorija", [
            "id" => $id,
        ]);
    }

    public function destroyKategorija($id) {
        $kategorija = Kategorija::findOrFail($id);
        $kategorija->delete();

        return redirect(url('/admin-kategorije'))->with("success", "Kategorija je uspesno obrisana!");
    }

    public function editKategorija($id) {
        $kategorija = Kategorija::findOrFail($id);
        return view('admin.editkategorija', [
            'kategorija' => $kategorija,
        ]);
    }

    public function updateKategorija(Request $request, $id) {
        if(empty($request->naziv)) {
            return redirect()->back()->with("error", "Naziv kategorije mora biti popunjen!");
        }

        $kategorija = Kategorija::findOrFail($id);
        $kategorija->naziv = $request->naziv;
        $kategorija->save();

        return redirect(url('/admin-kategorije'))->with("success", "Kategorija je uspešno izmenjena!");
    }
}

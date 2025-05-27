<?php

namespace Database\Seeders;

use App\Models\Obuka;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Obuka::create([
            'kategorija_id' => 1,
            'naziv' => 'Osnove Microsoft Office paketa',
            'opis' => 'Obuka "Osnove Microsoft Office paketa" osmišljena je tako da zaposlenima pruži temeljno razumevanje ključnih alata koji se svakodnevno koriste u poslovnom okruženju. Kroz praktičan rad i primere iz realnih situacija, polaznici će savladati osnovne funkcionalnosti Microsoft Word-a, Excel-a i PowerPoint-a, što će im omogućiti efikasnije obavljanje svakodnevnih zadataka. Poseban akcenat stavljen je na razvijanje veština koje doprinose boljoj organizaciji rada, jasnijoj komunikaciji i profesionalnoj prezentaciji podataka. Obuka ne zahteva predznanje i namenjena je svima koji žele da unaprede svoje digitalne kompetencije i lakše se prilagode zahtevima savremenog radnog okruženja.',
            'cena' => 4999.99,
            'slika' => 'images/office.png',
            'istaknuta' => true,
        ]);

        Obuka::create([
            'kategorija_id' => 2,
            'naziv' => 'Prva pomoć',
            'opis' => 'Obuka "Prva pomoć" namenjena je zaposlenima koji žele da steknu osnovna znanja i veštine neophodne za pravilno reagovanje u hitnim situacijama na radnom mestu i u svakodnevnom životu. Tokom obuke polaznici će naučiti kako da prepoznaju najčešće vrste povreda i zdravstvenih stanja koja zahtevaju hitnu intervenciju, kao i kako da pruže odgovarajuću pomoć dok ne stigne stručna medicinska ekipa. Poseban fokus stavlja se na razvijanje osećaja odgovornosti, smirenosti i spremnosti da se reaguje brzo i efikasno, što može biti ključno za spašavanje života i smanjenje posledica nezgoda.',
            'cena' => 5999.99,
            'slika' => 'images/prvapomoc.png',
            'istaknuta' => false,
        ]);

        Obuka::create([
            'kategorija_id' => 3,
            'naziv' => 'Vođenje online prodaje',
            'opis' => 'Obuka "Vođenje online prodaje" pruža polaznicima znanja i veštine potrebne za uspešno upravljanje prodajom putem interneta, uz primenu savremenih digitalnih alata i strategija. Kroz praktične primere i realne scenarije, polaznici će steći razumevanje procesa kreiranja i vođenja online prodavnica, upravljanja proizvodima, obrade porudžbina i komunikacije sa kupcima. Obuka takođe obuhvata osnove digitalnog marketinga, analitike prodaje i optimizacije korisničkog iskustva, sa ciljem povećanja prodaje i izgradnje poverenja kod potrošača. Namenjena je svima koji žele da razviju ili unaprede poslovanje u digitalnom okruženju, bez obzira na prethodno iskustvo.',
            'cena' => 7999.99,
            'slika' => 'images/onlineshop.png',
            'istaknuta' => true,
        ]);

        Obuka::create([
            'kategorija_id' => 4,
            'naziv' => 'Ekološka odgovornost',
            'opis' => 'Obuka "Ekološka odgovornost" ima za cilj da razvije svest o značaju očuvanja životne sredine i promoviše održivo ponašanje u svakodnevnom poslovanju. Polaznici će se upoznati sa osnovnim principima ekološki odgovornog delovanja, zakonskim okvirima i praksama koje doprinose smanjenju negativnog uticaja na okolinu. Kroz primere iz prakse i konkretne smernice, obuka podstiče odgovoran odnos prema resursima, racionalno korišćenje energije i upravljanje otpadom. Namenjena je svima koji žele da doprinesu održivom razvoju i postanu deo pozitivnih promena u svojoj organizaciji i zajednici.

',
            'cena' => 6999.99,
            'slika' => 'images/ekoloskaodgovornost.png',
            'istaknuta' => true,
        ]);

        Obuka::create([
            'kategorija_id' => 5,
            'naziv' => 'Razvoj liderskih veština',
            'opis' => 'Obuka "Razvoj liderskih veština" namenjena je zaposlenima koji teže ličnom i profesionalnom napretku kroz osnaživanje svojih sposobnosti vođenja. Kroz savremene pristupe i praktične primere, polaznici će se upoznati sa osnovnim principima uspešnog liderstva, razvojem emocionalne inteligencije, efektivnom komunikacijom i donošenjem odluka u timskom okruženju. Obuka podstiče preuzimanje odgovornosti, izgradnju poverenja i motivaciju drugih, kao i sposobnost da se usmeri tim ka zajedničkim ciljevima. Namenjena je svima koji žele da se istaknu kao vođe i doprinesu razvoju pozitivne i produktivne radne atmosfere.',
            'cena' => 8999.99,
            'slika' => 'images/leadership.png',
            'istaknuta' => false,
        ]);
    }
}

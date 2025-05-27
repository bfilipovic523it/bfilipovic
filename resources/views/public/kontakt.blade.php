@extends("layouts.public")

@section("title")
Kontakt
@endsection

@section("content")
<div class="w3-container w3-center" style="margin-top:80px">
    <h1 class="w3-jumbo w3-text-indigo"><b>Kontaktirajte nas</b></h1>
    <div>
        <p class="w3-xlarge">Stojimo na raspolaganju za sve dodatne informacije i savete oko izbora obuke.</p>
    </div>
</div>

<div class="w3-container w3-padding-32">
    <div class="w3-row-padding w3-center" style="margin:0 auto;max-width:1200px">
        <div class="w3-col m4 w3-padding">
            <div class="w3-padding-32" style="background:white;border-radius:12px;">
                <div class="w3-circle" style="width:80px;height:80px;margin:auto;background:#2196F3;display:flex;align-items:center;justify-content:center">
                    <i class="fa fa-map-marker w3-text-white" style="font-size:36px"></i>
                </div>
                <h3 style="font-weight:600;margin:20px 0 10px 0;color:#0D47A1">Adresa</h3>
                <p style="color:#333">Kneza Mihaila 6<br>11000 Beograd</p>
            </div>
        </div>

        <div class="w3-col m4 w3-padding">
            <div class="w3-padding-32" style="background:white;border-radius:12px;">
                <div class="w3-circle" style="width:80px;height:80px;margin:auto;background:#2196F3;display:flex;align-items:center;justify-content:center">
                    <i class="fa fa-phone w3-text-white" style="font-size:36px"></i>
                </div>
                <h3 style="font-weight:600;margin:20px 0 10px 0;color:#0D47A1">Telefon</h3>
                <p style="color:#333">+381 64 123 4567<br>Radno vreme: 09-17h</p>
            </div>
        </div>

        <div class="w3-col m4 w3-padding">
            <div class="w3-padding-32" style="background:white;border-radius:12px;">
                <div class="w3-circle" style="width:80px;height:80px;margin:auto;background:#2196F3;display:flex;align-items:center;justify-content:center">
                    <i class="fa fa-envelope w3-text-white" style="font-size:36px"></i>
                </div>
                <h3 style="font-weight:600;margin:20px 0 10px 0;color:#0D47A1">Email</h3>
                <p style="color:#333"><a href="mailto:eduka@edu.rs" style="color:#1976D2;text-decoration:none">eduka@edu.rs</a><br>Odgovor u roku od 24h</p>
            </div>
        </div>
    </div>
</div>

<div class="w3-container w3-center" style="margin-top:20px">
    <h1 class="w3-jumbo w3-text-indigo"><b>Lokacija</b></h1>
    <div>
        <p class="w3-xlarge" style="padding-bottom: 20px">Posetite nas na lokaciji prikazanoj na mapi ispod.</p>
    </div>
</div>
<div class="w3-container" style="padding:0 16px;max-width:1200px;margin:auto">
    <div class="w3-row-padding">
        <div class="w3-col l12 w3-margin-bottom">
            <div style="border-radius:12px;overflow:hidden;box-shadow:0 4px 8px 0 rgba(0,0,0,0.1)">
                <div class="w3-responsive" style="padding-top:40%;position:relative">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3010667932676!2d20.457250026238885!3d44.81543087107087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab26eb107e9%3A0x7fd51b4702d8675c!2z0KDQsNGH0YPQvdCw0YDRgdC60Lgg0YTQsNC60YPQu9GC0LXRgiDQo9C90LjQstC10YDQt9C40YLQtdGC0LAg0KPQvdC40L7QvQ!5e0!3m2!1ssr!2srs!4v1748169991609!5m2!1ssr!2srs"
                        style="border:0;position:absolute;top:0;left:0;width:100%;height:100%" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
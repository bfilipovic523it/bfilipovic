@extends("layouts.public")

@section("title")
{{ $obuka->naziv }}
@endsection

@section("content")
<div class="w3-container" style="margin-top:80px;padding:40px 0">
    <div class="w3-content" style="max-width:100%">
        <div class="w3-center w3-padding-32">
            <h1 class="w3-xxxlarge" style="font-weight:800;color:#0d47a1;text-shadow:1px 1px 3px rgba(0,0,0,0.1)">{{ $obuka->naziv }}</h1>
            <div style="width:80px;height:4px;background:#2196F3;margin:20px auto"></div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col m6">
                <div class="w3-display-container" style="padding-top:100%;position:relative;border-radius:12px;box-shadow:0 5px 15px rgba(0,0,0,0.08)">
                    <img src="{{ asset($obuka->slika) }}" alt="{{ $obuka->naziv }}" 
                         style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:contain;padding:20px">
                </div>
            </div>

            <div class="w3-col m6 w3-padding-large">
                <div class="w3-panel w3-round-xlarge" style="background:#fff;padding:25px;margin-bottom:30px;box-shadow:0 3px 10px rgba(0,0,0,0.05)">
                    <div class="w3-center">
                        <span class="w3-large" style="color:#555">Cena:</span>
                        <div class="w3-xxxlarge" style="font-weight:700;color:#1565C0;margin:10px 0">{{ number_format($obuka->cena, 2) }} RSD</div>
                    </div>
                </div>

                <div class="w3-panel" style="margin-bottom:30px">
                    <h3 style="font-weight:600;color:#0d47a1;margin-bottom:15px">Opis obuke</h3>
                    <div style="line-height:1.6;color:#444">{{ $obuka->opis }}</div>
                </div>

                <div class="w3-row">
                    <div class="w3-col s6 w3-padding-small">
                        <a href="{{ route('public.ponuda') }}" class="w3-button w3-block w3-round-xlarge w3-padding-large" 
                           style="background:#e3f2fd;color:#1565C0;border:2px solid #bbdefb">
                           <i class="fa fa-arrow-left"></i> Nazad
                        </a>
                    </div>
                    <div class="w3-col s6 w3-padding-small">
                        <a href="{{ route('public.prijava') }}" class="w3-button w3-block w3-round-xlarge w3-padding-large" 
                                style="background:linear-gradient(135deg,#2196F3 0%,#0d47a1 100%);color:#fff">
                                <i class="fa fa-check-circle"></i> Prijavi se
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
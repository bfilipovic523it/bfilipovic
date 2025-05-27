@extends("layouts.public")

@section("title")
Pocetna
@endsection

@section("content")
<div class="w3-container w3-center" style="margin-top:80px">
    <h1 class="w3-jumbo w3-text-indigo"><b>Izdvajamo iz cenovnika</b></h1>
    <div>
        <p class="w3-xlarge">Najbolji odnos cene i kvaliteta – izdvajamo sledeće obuke.</p>
    </div>
</div>

<div class="w3-container" style="margin-top:40px">
    <div class="w3-row-padding">
        @foreach($obuke as $obuka)
            @if($obuka->istaknuta)
            <div class="w3-col l4 m6 w3-margin-bottom">
                <div class="w3-card-4 w3-white w3-hover-shadow w3-round-large" style="transition:0.3s; height: 100%; min-height: 600px; display: flex; flex-direction: column;">
                    <div class="w3-display-container" style="height: 220px; overflow: hidden;">
                        <img src="{{ asset($obuka->slika) }}" alt="{{ $obuka->naziv }}" 
                             class="w3-image w3-round-top" 
                             style="width:100%; height:100%; object-fit: contain;">
                    </div>
                    <div class="w3-container w3-padding-16" style="flex: 1; display: flex; flex-direction: column;">
                        <h3 class="w3-text-indigo w3-center"><b>{{ $obuka->naziv }}</b></h3>
                        <div class="w3-panel" style="background: linear-gradient(135deg, #f5f9ff 0%, #e0edff 100%); border-radius: 8px; padding: 15px; margin: 15px 0; border: 1px solid #d0e0ff;">
                            <div class="w3-row">
                                <div class="w3-col s6" style="border-right: 1px dashed #a8c6ff;">
                                    <div class="w3-small w3-text-grey">STARA CENA:</div>
                                    <div class="w3-medium" style="text-decoration: line-through; color: #888;">{{ number_format($obuka->cena * 1.25, 2) }} RSD</div>
                                </div>
                                <div class="w3-col s6 w3-padding-left">
                                    <div class="w3-small w3-text-blue">NOVA CENA:</div>
                                    <div class="w3-xlarge w3-text-indigo" style="font-weight: 700;">{{ number_format($obuka->cena, 2) }} RSD</div>
                                </div>
                            </div>
                            <div class="w3-center w3-margin-top">
                                <span class="w3-tag w3-indigo w3-round" style="padding: 4px 12px; font-size: 12px;">UŠTEDA {{ number_format($obuka->cena * 0.25, 2) }} RSD</span>
                            </div>
                        </div>
                        <p class="w3-text-grey" style="flex: 1; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{{ $obuka->opis }}</p>
                        <div class="w3-row w3-margin-top">
                            <a href="{{ route('public.single', $obuka->id) }}" class="w3-button w3-blue w3-block w3-round w3-padding-16 w3-hover-dark-blue">
                                <i class="fa fa-info-circle"></i> Opširnije
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection

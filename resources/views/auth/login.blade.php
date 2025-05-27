@extends("layouts.public")

@section("title")
Login stranica
@endsection

@section("content")
<div class="w3-container" style="max-width:500px; margin:50px auto">
    <div class="w3-card-4 w3-white w3-round-large" style="padding:30px">
        <div class="w3-center w3-margin-bottom">
            <h2 class="w3-text-blue"><b>Prijavite se na Eduku</b></h2>
            <p class="w3-text-grey">Unesite podatke za prijavu</p>
        </div>

        @if (session("success"))
            <div class="w3-panel w3-pale-green w3-round-large">
                <p>{{session("success")}}</p>
            </div>
        @endif
        @if (session("error"))
            <div class="w3-panel w3-pale-red w3-round-large">
                <p>{{session("error")}}</p>
            </div>
        @endif

        <form action="{{ route('storeLogin') }}" method="post" class="w3-container">
            @csrf
            
            <div class="w3-section">
                <label class="w3-text-blue"><b>Email adresa</b></label>
                <input class="w3-input w3-border w3-round-large" type="email" name="email" 
                       placeholder="Unesite email adresu" required>
            </div>
            
            <div class="w3-section">
                <label class="w3-text-blue"><b>Lozinka</b></label>
                <input class="w3-input w3-border w3-round-large" type="password" name="password" 
                       placeholder="Unesite lozinku" required>
            </div>
            
            <div class="w3-section">
                <button type="submit" class="w3-button w3-blue w3-block w3-round-large w3-padding">
                    <b>PRIJAVI SE</b>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@extends("layouts/admin")

@section("title")
Registracija
@endsection

@section("content")

<div class="container-fluid">
    <div class="col-lg-8 mx-auto">
        @if($errors->any())
            <div class="alert alert-danger shadow-sm mt-4">
                <div class="mb-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Dodavanje novog korisnika</h5>
            </div>
            <div class="card-body px-4 py-3">
                <form action="{{ route('storeregister') }}" method="post" class="needs-validation" novalidate>
                    @csrf

                    <div class="form-group mb-4">
                        <label for="nameInput" class="form-label fw-bold">Korisničko ime</label>
                        <input type="text" class="form-control form-control-lg" id="nameInput" name="name" 
                               placeholder="Unesite željeno korisničko ime" required>
                        <div class="invalid-feedback">Unesite korisničko ime</div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="emailInput" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control form-control-lg" id="emailInput" name="email" 
                               placeholder="Unesite email adresu" required>
                        <div class="invalid-feedback">Unesite ispravnu email adresu</div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="passwordInput" class="form-label fw-bold">Lozinka</label>
                        <input type="password" class="form-control form-control-lg" id="passwordInput" 
                               name="password" placeholder="Unesite lozinku" required>
                        <div class="invalid-feedback">Unesite lozinku</div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('admin.listusers') }}" class="btn btn-outline-danger px-4">Otkaži</a>
                        <button type="submit" class="btn btn-primary px-4">
                            Dodaj korisnika
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
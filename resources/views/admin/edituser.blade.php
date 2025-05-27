@extends("layouts/admin")

@section("title")
Izmena korisnika
@endsection

@section("content")

@if(session("error"))
    <div class="alert alert-danger">
        {{ session("error") }}
    </div>
@endif

<div class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Izmena korisničkih podataka</h5>
            </div>
            <div class="card-body px-4 py-3">
                <form action="" method="post" class="needs-validation" novalidate>
                    @csrf

                    <div class="form-group mb-4">
                        <label for="nameInput" class="form-label fw-bold">Ime</label>
                        <input type="text" class="form-control form-control-lg" id="nameInput" name="name" value="{{ $user->name }}" required>
                        <div class="invalid-feedback">Unesite ime korisnika</div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="emailInput" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control form-control-lg" id="emailInput" name="email" value="{{ $user->email }}" required>
                        <div class="invalid-feedback">Unesite ispravnu email adresu</div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label fw-bold">Lozinka</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" value="Nije moguće menjati lozinku sa ove stranice." disabled>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('admin.listusers') }}" class="btn btn-outline-danger px-4">Nazad</a>
                        <button type="submit" class="btn btn-primary px-4">
                            Sačuvaj izmene
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

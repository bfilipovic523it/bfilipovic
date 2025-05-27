@extends("layouts/admin")

@section("title")
Dodavanje nove kategorije
@endsection

@section("content")
<div class="container-fluid">
    <div class="col-lg-6 mx-auto">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Dodavanje nove kategorije</h5>
            </div>
            <div class="card-body px-4 py-3">
                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.storekategorija') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-4">
                        <label for="nameInput" class="form-label fw-bold">Naziv kategorije</label>
                        <input type="text" name="naziv" id="nameInput" class="form-control form-control-lg" placeholder="Unesite naziv kategorije" required>
                        <div class="invalid-feedback">Unesite naziv kategorije</div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('admin.listkategorije') }}" class="btn btn-outline-danger px-4">Nazad</a>
                        <button type="submit" class="btn btn-primary px-4">
                            Dodaj kategoriju
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

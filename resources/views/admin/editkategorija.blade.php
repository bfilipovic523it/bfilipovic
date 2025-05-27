@extends("layouts/admin")

@section("title")
    Izmena kategorije
@endsection

@section("content")

@if(session("error"))
    <div class="alert alert-danger">
        {{ session("error") }}
    </div>
@endif

@if(session("success"))
    <div class="alert alert-success">
        {{ session("success") }}
    </div>
@endif

<div class="container-fluid">
    <div class="col-lg-6 mx-auto">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Izmena kategorije</h5>
            </div>
            <div class="card-body px-4 py-3">
                <form action="{{ route('admin.editkategorija', $kategorija->id) }}" method="POST" class="needs-validation" novalidate>
                    @csrf    
                    <div class="form-group mb-4">
                        <label for="nameInput" class="form-label fw-bold">Naziv kategorije</label>
                        <input type="text" name="naziv" id="nameInput" class="form-control form-control-lg" value="{{ $kategorija->naziv }}">
                        <div class="invalid-feedback">Unesite naziv kategorije</div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('admin.listkategorije') }}" class="btn btn-outline-danger px-4">Nazad</a>
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

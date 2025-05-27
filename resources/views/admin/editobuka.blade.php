@extends("layouts/admin")

@section("title")
Izmena obuke
@endsection

@section("content")

@if(session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<div class="container-fluid">
    <div class="col-lg-10 mx-auto">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <h5 class="mb-0">Izmena obuke</h5>
            </div>
            <div class="card-body px-4 py-3">
                <form action="{{ route('admin.updateobuka', $obuka->id) }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <div class="form-group mb-4">
                        <label for="nazivInput" class="form-label fw-bold">Naziv obuke</label>
                        <input type="text" class="form-control form-control-lg" id="nazivInput" name="naziv" value="{{ $obuka->naziv }}" required>
                        <div class="invalid-feedback">Unesite naziv obuke</div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="opisEditor" class="form-label fw-bold">Detaljan opis</label>
                        <div class="border rounded">
                            <textarea name="opis" id="opisEditor" class="form-control border-0" rows="8" required>{{ $obuka->opis }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="cenaInput" class="form-label fw-bold">Cena (RSD)</label>
                                <div class="input-group">
                                    <input type="number" name="cena" id="cenaInput" class="form-control" value="{{ $obuka->cena }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="form-label fw-bold">Trenutna slika</label>
                                <div class="border p-2 text-center">
                                    <img src="{{ asset($obuka->slika) }}" width="120" height="120" class="img-thumbnail">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="slikaInput" class="form-label fw-bold">Novi logo (opciono)</label>
                            <input type="file" class="form-control" id="slikaInput" name="slika" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="kategorijaSelect" class="form-label fw-bold">Izaberite kategoriju</label>
                        <select name="kategorija_id" id="kategorijaSelect" class="form-select" required>
                            @foreach($kategorije as $kategorija)
                                <option value="{{ $kategorija->id }}" {{ $obuka->kategorija_id == $kategorija->id ? "selected" : "" }}>
                                    {{ $kategorija->naziv }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <div class="form-check form-switch ml-4">
                            <input class="form-check-input" type="checkbox" role="switch" id="istaknutaSwitch" name="istaknuta" value="1" {{ $obuka->istaknuta ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="istaknutaSwitch">Obuka se izdvaja iz cenovnika</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('admin.listobuke') }}" class="btn btn-outline-danger px-4">Odustani</a>
                        <button type="submit" class="btn btn-success px-4">
                            Sačuvaj izmene
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['para', ['ul', 'ol']],
            ['insert', ['link', 'picture']]
        ]
    });
});
</script>
@endsection
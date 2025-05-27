@extends("layouts/admin")

@section("title")
    Brisanje korisnika
@endsection

@section("content")
    <div class="container-fluid">
    <div class="col-lg-6 mx-auto">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Brisanje korisnika</h5>
            </div>
            <div class="card-body px-4 py-3 text-center">
                <div class="alert alert-danger mb-4">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Da li ste sigurni da želite da obrišete ovog korisnika?
                </div>

                <form action="{{ route('admin.deleteuser', $id) }}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger px-4">
                        Obriši
                    </button>
                </form>
                
                <a href="{{ route('admin.listusers') }}" class="btn btn-outline-secondary px-4">
                    Otkaži
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
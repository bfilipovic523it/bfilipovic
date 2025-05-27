@extends("layouts/admin")

@section("title")
    Obuke
@endsection

@section("content")
<div class="container-fluid px-0">
    @if(session("success"))
        <div class="alert alert-success alert-dismissible fade show border-0 rounded-0 mb-0">
            {{ session("success") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session("info"))
        <div class="alert alert-info alert-dismissible fade show border-0 rounded-0 mb-0">
            {{ session("info") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center py-3 px-2 border-bottom" style="color:#0d6efd">
        <h1 class="h5 mb-0"><i class="fas fa-user-graduate me-3"></i>Sve obuke</h1>
        <a href="{{ route('admin.addobuka') }}" class="btn btn-outline-primary btn-sm">
            + Dodaj novu obuku
        </a>
    </div>

    <div class="bg-white">
        <table id="productsTable" class="table table-borderless mb-0">
            <thead>
                <tr class="border-bottom table-light">
                    <th width="5%">ID</th>
                    <th width="10%">Slika</th>
                    <th width="15%" class="text-center">Naziv</th>
                    <th width="20%" class="text-center">Opis</th>
                    <th width="10%" class="text-center">Cena</th>
                    <th width="15%" class="text-center">Kategorija</th>
                    <th width="10%" class="text-center">Istaknut</th>
                    <th width="15%" class="text-center">Izmene</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obuke as $obuka)
                <tr class="border-bottom">
                    <td>{{ $obuka->id }}</td>
                    <td>
                        <img src="{{ asset($obuka->slika) }}" alt="{{ $obuka->naziv }}" 
                             class="img-fluid" style="width: 50px; height: 50px; object-fit: cover;">
                    </td>
                    <td>{{ $obuka->naziv }}</td>
                    <td class="text-muted text-center">{{ Str::limit($obuka->opis, 50) }}</td>
                    <td class="text-center">{{ number_format($obuka->cena, 2) }} RSD</td>
                    <td class="text-center">{{ $obuka->kategorija->naziv ?? 'Nekategorizovana' }}</td>
                    <td class="text-center">{{ $obuka->istaknuta ? 'Da' : 'Ne' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="{{ route('admin.editobuka', $obuka->id) }}" 
                               class="btn btn-sm btn-outline-warning border-0">
                                <i class="fas fa-edit"></i>Izmeni
                            </a>
                            <a href="{{ route('admin.deleteobuka', $obuka->id) }}" 
                               class="btn btn-sm btn-outline-danger border-0">
                                <i class="fas fa-trash-alt"></i>Obriši
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    $('#obukasTable').DataTable({
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/sr-SP.json'
        }
    });

    $('[data-bs-toggle="tooltip"]').tooltip();
});
</script>
@endsection
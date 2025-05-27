@extends("layouts/admin")

@section("title")
    Kategorije
@endsection

@section("content")
<div class="container-fluid px-0">
    @if(session("success"))
        <div class="alert alert-success alert-dismissible fade show border-0 rounded-0 mb-0">
            {{ session("success") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session("error"))
        <div class="alert alert-danger alert-dismissible fade show border-0 rounded-0 mb-0">
            {{ session("error") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center py-3 px-2 border-bottom" style="color:#0d6efd">
        <h1 class="h5 mb-0"><i class="fa-solid fa-layer-group me-3"></i>Sve kategorije</h1>
        <a href="{{ route('admin.addkategorija') }}" class="btn btn-outline-primary btn-sm">
            + Dodaj novu kategoriju
        </a>
    </div>

    <div class="bg-white">
        <table id="categoriesTable" class="table table-borderless mb-0">
            <thead>
                <tr class="border-bottom table-light">
                    <th width="10%">ID</th>
                    <th width="80%" class="text-center">Naziv</th>
                    <th width="10%" class="text-center">Izmene</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategorije as $kategorija)
                <tr class="border-bottom">
                    <td>{{ $kategorija->id }}</td>
                    <td class="text-center">{{ $kategorija->naziv }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="{{ route('admin.editkategorija', $kategorija->id) }}" 
                               class="btn btn-sm btn-outline-warning border-0">
                                <i class="fas fa-edit"></i>Izmeni
                            </a>
                            <a href="{{ route('admin.deletekategorija', $kategorija->id) }}" 
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
    $('#kategorijasTable').DataTable({
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/sr-SP.json'
        },
        columnDefs: [
            { orderable: false, targets: [2] },
            { searchable: false, targets: [2] }
        ],
        order: [[1, 'asc']]
    });

    $('[data-bs-toggle="tooltip"]').tooltip();
});
</script>
@endsection
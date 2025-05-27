@extends("layouts/admin")

@section("title")
    Korisnici
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
        <h1 class="h5 mb-0"><i class="fas fa-users me-3"></i>Svi korisnici</h1>
        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-user-plus me-1"></i> Dodaj korisnika
        </a>
    </div>

    <div class="bg-white">
        <table id="usersTable" class="table table-borderless mb-0">
            <thead>
                <tr class="border-bottom table-light">
                    <th width="5%" class="text-center">ID</th>
                    <th width="20%" class="text-center">Ime</th>
                    <th width="25%" class="text-center">Email</th>
                    <th width="15%" class="text-center">Uloga</th>
                    <th width="15%" class="text-center">Registrovan</th>
                    <th width="20%" class="text-center">Izmene</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-bottom">
                    <td class="text-center">{{ $user->id }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">
                        <span>
                            {{ $user->role->naziv ?? 'Nedefinisano' }}
                        </span>
                    </td>
                    <td class="text-center">{{ $user->created_at->format('d.m.Y.') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="{{ route('admin.edituser', $user->id) }}" 
                               class="btn btn-sm btn-outline-warning border-0"
                               data-bs-toggle="tooltip" title="Izmeni">
                                <i class="fas fa-edit"></i>Izmeni
                            </a>
                            <a href="{{ route('admin.deleteuser', $user->id) }}" 
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
    $('#usersTable').DataTable({
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/sr-SP.json'
        },
        columnDefs: [
            { orderable: false, targets: [5] },
            { searchable: false, targets: [5] } 
        ]
    });

    $('[data-bs-toggle="tooltip"]').tooltip();
});
</script>
@endsection
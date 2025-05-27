@extends("layouts.public")

@section("title")
Moj profil
@endsection

@section("content")
<div class="container-fluid">
    <div class="col-lg-10 mx-auto">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <h1 class="fw-bold mb-0 text-primary">Moj profil</h1>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h3 class="card-title">Dobrodošli, {{ $user->name }}</h3>
            </div>
        </div>
        @if($prijave && count($prijave) > 0)
        <div class="card shadow-sm">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Moje obuke</h5>
                <a class="btn btn-primary" href="{{ route('public.prijava') }}">
                    <i class="fas fa-plus me-2"></i> Prijavi se na obuku
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Datum prijave</th>
                                <th>Obuka</th>
                                <th>Cena</th>
                                <th>Odjava</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prijave as $prijava)
                                <tr>
                                    <td>{{ $prijava->id }}</td>
                                    <td>{{ $prijava->created_at->format('d.m.Y. H:i') }}</td>
                                    <td>{{ $prijava->obuka->naziv }}</td>
                                    <td>{{ number_format($prijava->ukupna_cena, 2) }} RSD</td>
                                    <td>
                                        <form action="{{ route('public.odjava', $prijava->id) }}" method="POST" onsubmit="return confirm('Da li ste sigurni da želite da se odjavite sa ove obuke?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-sign-out-alt me-1"></i> Odjavi se
                                            </button>
                                        </form>
                                    </td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-info">
            Niste prijavljeni ni na jednu obuku
        </div>
        @endif
    </div>
</div>
@endsection
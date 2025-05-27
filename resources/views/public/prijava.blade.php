@extends('layouts.public')

@section('title')
Prijavljivanje na obuku
@endsection

@section('content')
<div class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Prijavljivanje na obuku</h5>
            </div>
            <div class="card-body px-4 py-3">
                @if(session('success'))
                <div class="alert alert-success mb-4">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <form action="{{ route('public.prijava') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="form-label fw-bold">Izaberite obuku koju želite da pohađate</label>
                        <select name="obuka_id" class="form-select" required>
                            <option value="">Izaberite obuku ovde</option>
                            @foreach($obuke as $obuka)
                            <option value="{{ $obuka->id }}">
                                {{ $obuka->naziv }} - {{ number_format($obuka->cena, 2) }} RSD
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-5">
                        <a href="{{ route('public.profil') }}" class="btn btn-outline-danger px-4">
                            Otkaži
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            Potvrdi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
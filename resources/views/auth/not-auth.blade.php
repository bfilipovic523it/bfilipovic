@extends("layouts/public")

@section("title")
Not auth
@endsection

@section("content")
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="text-center">Greška</h4>
                </div>
                <div class="card-body text-center py-4 d-flex justify-content-center">
                    <p class="h5">Nemate pristup ovoj stranici!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
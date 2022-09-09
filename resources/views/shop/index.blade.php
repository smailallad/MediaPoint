@extends('home')
@section('content')
<div class="album py-5 bg-light">/
    <div class="container">
        <div class="row">
          @foreach ($produits as $produit)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('produits/p').$produit->id.'.jpeg' }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{ $produit->nom }} <br> {{ $produit->description }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
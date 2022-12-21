@extends('layouts.app')
@section('content')
    <div class="container">
      <h2>La lista dei treni.</h2>
      <div class="row row-cols-3">
        @foreach ($collection as $item)
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4>{{ $train->codice_treno }} {{ $train->stazione_di_partenza }}</h4>
                </div>     
              </div>
            </div>
        @endforeach
      </div>
    </div>
@endsection
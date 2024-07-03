
@extends('layouts.app')
@section('content')
 <div class="container">
 <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="float-start">
            {{ __('destinasi') }};
        </div>
        <div class="float-end">
        </div>
    </div>

    <div class="card-body">
        <img src="{{ asset('storage/destinasis/' . $destinasi->image) }}" class="w-100 rounded">
        <hr>
        <h4>{{ $destinasi->nama }}</h4>

        <p class="tmt-3">
            {!! $destinasi->deskripsi !!}
        </p>
    </div>
             
        </div>
      </div>
    </div>

</div>   
</div>   
@endsection
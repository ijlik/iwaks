@extends('layouts.app')
@section('content')

    <div class="col-md-10">
        <div id="single-page">
            <div class="thumb">
                <img style="width: 30px; width: auto;" src="/storage/{{ $ikan->gambar }}" alt="">
            </div>
            <div class="content">
                <h1 class="title">{{ $ikan->nama }}</h1>
                <p>
                   {{ $ikan->keterangan }}
                </p>
            </div>
        </div>
    </div>

@endsection
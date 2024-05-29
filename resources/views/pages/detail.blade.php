@extends('layouts.app')


@section('title', 'Detail Anggota')
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0"">
              <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item white" aria-current="page">
                            Anggota
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Details
                        </li>
                    </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-details">
                        <h1>{{$item->name}}</h1>
                        <p>
                            {{$item->job}}
                        </p>
                        @if($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{Storage::url($item->galleries->first()->image)}}" xoriginal="{{Storage::url($item->galleries->first()->image)}}" />
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{Storage::url($gallery->image)}}">
                                        <img class="xzoom-gallery" width="128" src="{{Storage::url($gallery->image)}}" xpreview="{{Storage::url($gallery->image)}}" /></a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @endif
                        <h2>Tentang {{$item->name}}</h2>
                        {!! $item->about!!}
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection


@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}" />
@endpush
@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
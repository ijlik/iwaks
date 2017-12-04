@extends('layouts.app')
@section('content')

    <div id="all-output" class="col-md-10">
        <div id="history">

            <h1 class="title">FISHOPEDIA</h1>

            <div class="filter">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#karnivora">Karnovora</a></li>
                            <li><a data-toggle="tab" href="#herbivora">Herbivora</a></li>
                            <li><a data-toggle="tab" href="#omnivora">Omnivora</a></li>
                        </ul>
                    </div><!-- // col-md-8 -->
                </div><!-- // row -->
            </div><!-- // filter -->

            <div class="tab-content">

                <div id="karnivora" class="tab-pane fade in active">

                    <div class="row">

                        <!-- video-item -->
                        @foreach($karni as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="video-item">
                                <div class="video-info">
                                    <a href="{{ url('fishopedia/ikan/'.$item->id) }}"><img style="height: 170px; width: auto" src="/storage/{{ $item->gambar }}" alt=""></a>
                                    <a href="{{ url('fishopedia/ikan/'.$item->id) }}" class="title">{{ $item->nama }}</a>
                                    <span class="views"><i class="fa fa-eye"></i>{{ $item->jenis }} </span>
                                    <span class="date"><i class="fa fa-clock-o"></i>{{ $item->habitat }} </span>
                                    {{--<a class="channel-name">{{ $item->keterangan }}</a>--}}
                                </div>
                            </div>
                        </div>
                        <!-- // video-item -->
                        @endforeach

                    </div>

                </div><!-- // karnivora -->

                <div id="herbivora" class="tab-pane fade">
                    <div class="row">
                        <!-- video-item -->
                        @foreach($herbi as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="video-item">
                                    <div class="video-info">
                                        <a href="{{ url('fishopedia/ikan/'.$item->id) }}"><img style="height: 170px; width: auto" src="/storage/{{ $item->gambar }}" alt=""></a>
                                        <a href="{{ url('fishopedia/ikan/'.$item->id) }}" class="title">{{ $item->nama }}</a>
                                        <span class="views"><i class="fa fa-eye"></i>{{ $item->jenis }} </span>
                                        <span class="date"><i class="fa fa-clock-o"></i>{{ $item->habitat }} </span>
                                        {{--<a class="channel-name">{{ $item->keterangan }}</a>--}}
                                    </div>
                                </div>
                            </div>
                            <!-- // video-item -->
                        @endforeach

                    </div>
                </div>

                <div id="omnivora" class="tab-pane fade">
                    <div class="row">
                        <!-- video-item -->
                        @foreach($omni as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="video-item">
                                    <div class="video-info">
                                        <a href="{{ url('fishopedia/ikan/'.$item->id) }}"><img style="height: 170px; width: auto" src="/storage/{{ $item->gambar }}" alt=""></a>
                                        <a href="{{ url('fishopedia/ikan/'.$item->id) }}" class="title">{{ $item->nama }}</a>
                                        <span class="views"><i class="fa fa-eye"></i>{{ $item->jenis }} </span>
                                        <span class="date"><i class="fa fa-clock-o"></i>{{ $item->habitat }} </span>
                                        {{--<a class="channel-name">{{ $item->keterangan }}</a>--}}
                                    </div>
                                </div>
                            </div>
                            <!-- // video-item -->
                        @endforeach

                    </div>
                </div>

            </div><!-- // tab-content -->

        </div><!-- // history -->
    </div>

@endsection
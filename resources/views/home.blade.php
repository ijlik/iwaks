@extends('layouts.app')

@section('content')

    <div id="all-output" class="col-md-10">
        <div class="row">
            <!-- Watch -->
            <div class="col-md-8">
                <div id="watch">


                    @if($eco != null)
                        @if(count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible" data-auto-dismiss="2000" role="alert">
                                <p style="color: #a94442"><i class="fa fa-times"></i> Makanan masih belum habis</p>
                            </div>
                        @endif
                    <h1 class="video-title">{{ $eco->nama }}</h1><hr>
                    <div class="row">
                        <div class="col-md-2">
                            <form action="{{ url('clear/ekosistem') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="ekosistem_id" value="{{ $eco->id }}">
                                <button type="submit" value="submit" class="btn btn-danger">Clear Aquarium</button>
                            </form>
                        </div>
                        <div class="col-md-2 col-md-offset-6">
                            <img src="/storage/{{ $gambarpakan }}">
                        </div>
                        <div class="col-md-2">
                            <h2>Pakan : {{ $pakan }}</h2>
                        </div>
                    </div>
                    <div class="video-code" style="background-image: url('img/air-{{ $eco->water_id }}.jpg'); background-size: cover">
                        <div style="background-image: url('/img/frame-{{ $eco->frame_id }}.png');background-size: contain;width: 100%; height: 451px; padding: 20px; padding-top: 40px">
                            @if($ecoikan != null)
                            @foreach($ecoikan as $data)
                            <div class="col-md-2">
                                <img class="ikan" src="/storage/{{ \App\Iwak::where('id','=',$data->ikan_id)->first()->gambar }}">
                                {{--<img src="/img/ikan.png">--}}
                            </div>
                            @endforeach
                            @endif
                        </div>
                        {{--<iframe width="100%" height="415" src="https://www.youtube.com/embed/pS35WpIfwDM" frameborder="0" allowfullscreen></iframe>--}}
                    </div><!-- // video-code -->

                    <div class="video-share">
                        <ul class="like">
                            @if($ecoikan != null)
                            <li><a class="deslike">Berdasarkan habitatnya</a></li>
                            <?php $x = 0 ?>
                            @foreach($ecoikan as $semua)
                            <li><a class="deslike">ikan {{ \App\Iwak::find($semua->ikan_id)->nama }}, {{ $pesanAnalisisAir[$x] }}.<br></a></li>
                            <?php $x = $x +1?>
                            @endforeach
                            <br><br>
                                @if($pesanAnalisisIkan != null)
                                    @foreach($pesanAnalisisIkan as $analisisIkan)
                                        <li><a class="deslike">{{ $analisisIkan }}</a></li>
                                    @endforeach
                                @endif
                            <br><br>
                                @if($pesanAnalisisPakan != null)
                                    <?php $indexIkan = 0; ?>
                                    @foreach($pesanAnalisisPakan as $analisisPakan)
                                        <li><a class="deslike">{{ "Ikan ".\App\Iwak::find($dftIkan[$indexIkan])->nama." ".$analisisPakan." ".$pakan }}</a></li>
                                        <?php $indexIkan = $indexIkan + 1; ?>
                                    @endforeach
                                @endif
                            @endif
                        </ul>



                    </div><!-- // video-share -->
                    <!-- // Video Player -->
                    @else
                        <h1 class="video-title">Anda tidak punya Ekosistem untuk ditampilkan</h1>
                        <a data-target="#buatekosistem" data-toggle="modal" role="button" class="btn btn-primary">Buat Ekosistem</a>
                    @endif

                    <div id="buatekosistem" data-backdrop="static" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Buat Ekosistem</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- form start -->
                                    <form action="{{ url('ekosistem/buat') }}" method="post">
                                        {{ csrf_field() }}
                                    <h3>Nama Ekosistem</h3>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" minlength="10" maxlength="20">
                                    <h3>Pilih jenis air</h3>
                                    @foreach($water as $isi)
                                    <div class="radio">
                                        <label><input type="radio" name="water_id" value="{{ $isi->id }}">{{ $isi->nama }}</label>
                                    </div>
                                    @endforeach


                                </div>
                                <div class="modal-footer">
                                    <button id="submit" type="submit" class="btn btn-primary">Buat</button>
                                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- // watch -->
            </div><!-- // col-md-8 -->
            <!-- // Watch -->
            @if($eco != null)
            <!-- Related Posts-->
            <div class="col-md-4">
                <div id="bag">

                    <div class="tab" >
                        <button style="width:33.3%" class="tablinks" onclick="openCity(event, 'Fish')">Fish</button>
                        <button style="width:33.3%" class="tablinks" onclick="openCity(event, 'Water')">Water</button>
                        <button style="width:33.3%" class="tablinks" onclick="openCity(event, 'Food')">Food</button>
                    </div>

                    <div id="Fish" class="tabcontent">
                        @foreach($ikan as $ini)
                        <div class="bag-content">
                            <div class="thumb">
                                <a href="#"><img src="/storage/{{ $ini->gambar }}" alt=""></a>
                            </div>
                            <a href="#" class="title">{{ $ini->nama }}</a>
                            <p>({{ $ini->jenis }})</p>
                            <form action="{{ url('tambah/ikan') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="ekosistem_id" value="{{ $eco->id }}">
                                <input type="hidden" name="ikan_id" value="{{ $ini->id }}">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </form>
                            <form action="{{ url('buang/ikan') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="ikan_id" value="{{ $ini->id }}">
                                <button class="btn btn-danger" type="submit">Remove</button>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    <div id="Water" class="tabcontent">
                        @foreach($water as $item)
                        <div class="bag-content">
                            <div class="thumb">
                                <a href="#"><img src="/img/air-{{ $item->id }}.jpg" alt=""></a>
                            </div>
                            <a href="#" class="title">{{ $item->nama }}</a>
                            <form action="{{ url('ganti/air') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="ekosistem" value="{{ $eco->id }}">
                                <input type="hidden" name="water_id" value="{{ $item->id }}">
                                <button class="btn btn-warning" type="submit">Ganti</button>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    <div id="Food" class="tabcontent">
                        @foreach($food as $item)
                        <div class="bag-content">
                            <div class="thumb">
                                <a href="#"><img src="/storage/{{ $item->gambar }}" alt=""></a>
                            </div>
                            <a href="#" class="title">{{ $item->jenis }}</a>
                            <form action="{{ url('tambah/makanan') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="ekosistem_id" value="{{ $eco->id }}">
                                <input type="hidden" name="makanan_id" value="{{ $item->id }}">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    @endif

                </div>
            </div><!-- // col-md-4 -->
            <!-- // Related Posts -->
        </div><!-- // row -->
    </div>
<script>window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);</script>

@endsection

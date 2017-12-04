@extends('layouts.app')
@section('content')

<div id="all-output" class="col-md-10 upload">
    <div id="upload">
        <div class="row">
            <!-- upload -->
            <div class="col-md-8">
                <h1 class="page-title"><span>Profile</span></h1>
                <form action="{{ url('profile/update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="{{ $player->nama }}" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="{{ $player->email }}" disabled>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label>Avatar</label>
                            <input id="upload_file" type="file" class="file" name="avatar">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" id="contact_submit" class="btn btn-dm">Save it!</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-3">
                <a href="#"><img src="{{ $avatar }}" alt=""></a>
            </div><!-- // col-md-8 -->
            <div class="col-md-1"></div>
            <!-- // upload -->
        </div><!-- // row -->
    </div><!-- // upload -->
</div>

@endsection
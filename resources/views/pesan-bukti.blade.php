@extends('layouts.app')
@section('content')
<div class="container col-5 mt-5">
    <div class="booking-form mt-3">
        <h4>FORM BAYAR</h4>
        <form class="forms-sample" action="{{route('index-pesan-upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group col-xs-12">
                <input type="text" class="form-control-file " placeholder="2640539600" disabled>
                <input type="text" class="form-control-file " placeholder="BCA" disabled>
                <input type="text" class="form-control-file " placeholder="AN. Firman Alfa Army" disabled>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Upload Bukti Pembayaran</label>
                <div class="input-group col-xs-12">
                    <input type="file" name="file_img" id="file_img" class="form-control-file " placeholder="Upload Image">
                </div>
            </div>
            <input type="hidden" value="{{ $data->id }}" class="form-control" name="name" required>
            <div class="form-btn mt-3">
                <a href="#">
                    <button type="submit" class="btn btn-primary ms-auto" style="margin-top: 0px;">
                        Upload
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
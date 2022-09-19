@extends('admin.dashboard')
@section('content')

<div class="col-md-8 py-5 mt-5 ">
  <div class="mt-5">
    <div class="">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">PAKET WISATA</h4>
          <form class="forms-sample" action='{{route("update-paket",$paket->id)}}' method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
              <label for="exampleInputPassword4">Title</label>
              <input value="{{$paket->title}}" type="text" name="title" class="form-control" id="exampleInputPassword4" placeholder="masukkan judul" autocomplete="on">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Excerpt</label>
              <input value="{{$paket->excerpt}}" type="text" name="excerpt" class="form-control" id="exampleInputPassword4" placeholder="masukkan excerpt" autocomplete="on">
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">File upload</label>
              <div class="input-group col-xs-12">
                <input value="{{$paket->img}}" type="file" name="file_img" id="file_img" class="form-control-file " placeholder="Upload Image">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Price</label>
              <input value="{{$paket->price}}" type="text" name="price" class="form-control" id="exampleInputPassword4" placeholder="masukkan harga">
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea class="form-control" name="description" id="exampleTextarea1" rows="2">{{$paket->deskripsi}}</textarea>
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
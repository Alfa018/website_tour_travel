@extends('admin.dashboard')
@section('content')

<div class="col-md-8 py-5 mt-5 ">
  <div class="mt-5">
    <div>
      <a href="{{route('paket-create')}}" style="text-decoration: none;">
        <div class="btn-group" role="group" aria-label="Basic outlined example" style="margin-left: 12px;">
          <button type="button" class="btn btn-success">ADD</button>
        </div>
      </a>
      <div class="col-12 grid-margin stretch-card" style="width: 200%;">
        <div class="card">
          <div class="card-body">
              <h4 class="card-title">PAKET WISATA</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Title </th>
                    <th> Excerpt </th>
                    <th> Gambar </th>
                    <th> Price </th>
                    <th> Deskripsi </th>
                    <th colspan="2"> Aksi </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td> {{$d->id}} </td>
                    <td> {{$d->title}} </td>
                    <td> {{$d->excerpt}} </td>
                    <td>
                      <di>
                        <img src="{{url('file/'.$d->img)}}" alt="" width="200" height="200">
                      </di>
                    </td>
                    <td> {{$d->price}} </td>
                    <td> {{$d->deskripsi}} </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-primary">
                          <a href='{{url("paket/{$d->id}/edit")}}' style="color:white;">Edit</a>
                        </button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
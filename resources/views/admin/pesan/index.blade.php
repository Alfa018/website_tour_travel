@extends('admin.dashboard')
@section('content')

<div class="col-md-8 py-5 mt-5 ">
  <div class="mt-5">
    <div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">BOOKING</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Name </th>
                    <th> Departure </th>
                    <th> Passenger </th>
                    <th> Paket </th>
                    <th> Bukti Pembayaran </th>
                    <th> Keterangan </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  @endphp
                  @foreach($data as $d)
                  <tr>
                    <td> {{$no}} </td>
                    <td> {{$d->name}} </td>
                    <td> {{$d->departure}} </td>
                    <td> {{$d->passenger}} </td>
                    <td> {{$d->title}} </td>
                    <td>
                      <di>
                        <img src="{{url('upload-bukti-pembayaran/'.$d->img)}}" alt="" width="200" height="200">
                      </di>
                    </td>
                    <td>
                      @if($d->img == null)
                      <div class="btn btn-danger" role="group" aria-label="Basic outlined example">
                        BELUM BAYAR
                        </button>
                      </div>
                      @else
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-success">
                          SUDAH BAYAR
                      </div>
                      @endif
                    </td>
                  </tr>
                  @php
                  $no++;
                  @endphp
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
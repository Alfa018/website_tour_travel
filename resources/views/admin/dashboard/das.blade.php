@extends('admin.dashboard')
@section('content')
<div class="mt-5">
  <div class="row mt-5 py-5">
    <div class="col-md-12 grid-margin">
      <div class="card-body">
        <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
                <h4 style="color: #0080FF;"><b> Package</b></h4>
                <h4 class="mt-3"><b> {{$paket}} </b></h4>
                <p class="card-text mt-3">Number of packages provided</p>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
                <h4 style="color: #0080FF;"><b> Gallery</b></h4>
                <h4 class="mt-3"><b> {{$galeri}} </b></h4>
                <p class="card-text mt-3">Documentation when serving customers</p>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
                <h4 style="color: #0080FF;"><b> User </b></h4>
                <h4 class="mt-3"><b> {{$user}} </b></h4>
                <p class="card-text mt-3">Registered users</p>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
                <h4 style="color: #0080FF;"><b>Booking</b></h4>
                <h4 class="mt-3"><b> {{$pesan}} </b></h4>
                <p class="card-text mt-3">Number of packages ordered</p>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
@extends('layouts.app')
@section('content')
<div class="container  mt-5">
  <h2>Transaction</h2>
  <table class="table caption-top mt-3">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Name </th>
        <th scope="col">Departure</th>
        <th scope="col">Passenger</th>
        <th scope="col"> Package </th>
        <th scope="col">Description</th>
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
          <input type="hidden" value="{{ $d->id }}" class="form-control" name="name" required>
          <a href="{{url('pesan-bukti')}}">
            <!-- <button type="button" class="btn btn-danger" style="font-size: 11px; padding: 10p 24px;">not yet paid</button> -->
            @if($d->img == null)
            <div class="btn btn-danger" role="group" aria-label="Basic outlined example">
              NOT YET PAID
            </div>
            @else
            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-success">
                ALREADY PAID
            </div>
          </a>
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

@endsection
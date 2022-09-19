@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row" style="border: 1px;">
        <div class="col-9">
            <center>
                <h4>PROFILE</h4>
            </center>
        </div>
        <div class="col-4 mt-3">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
        <div class="col-8 mt-3">
            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <span class="form-label">Name</span>
                    <input value="" type="name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <span class="form-label">E-mail</span>
                    <input value="" type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <span class="form-label">Phone Number</span>
                    <input value="" type="no_tlp" class="form-control" name="no_tlp" required>
                </div>
                <div class="form-group">
                    <span class="form-label">Address</span>
                    <textarea class="form-control" name="alamat" id="exampleTextarea1" rows="2"></textarea>
                </div>
                <div class="form-btn mt-3">
                    <a href="#">
                        <!-- <button type="submit" class="btn btn-primary ms-auto" style="margin-top: 0px;">
                            Book
                        </button> -->
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
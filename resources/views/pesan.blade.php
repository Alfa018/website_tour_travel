<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    #google_translate_element {
      z-index: 1;
      position: fixed;
      bottom: 0;
      right: 0;
      background: transparent;
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .goog-te-banner-frame.skiptranslate {
      display: none !important;
    }

    body {
      top: 0px !important;
    }
  </style>
</head>

<body>
  <div class="container col-5 mt-5">
    <div class="booking-form">
      <h4>FORM BOOKING</h4>
      <form class="forms-sample" action="{{route('pesan-store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <span class="form-label">Name</span>
          <input type="name" class="form-control" name="name" required>
        </div>
        <div class="form-group">
          <span class="form-label">Departure</span>
          <input type="date" class="form-control" name="departure" required>
        </div>
        <div class="form-group">
          <span class="form-label">Passenger</span>
          <select class="form-control" name="passenger">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <input type="hidden" value="{{ $data }}" class="form-control" name="id_paket" required>
        <input type="hidden" value="{{ $user_id }}" class="form-control" name="id_user" required>
        <div class="form-btn mt-3">
          <a href="#">
            <button type="submit" class="btn btn-primary ms-auto" style="margin-top: 0px;">
              Book
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
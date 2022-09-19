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
  <br>
  <section>
    <div class="container mb-5" id="detail">
      <div class="row">
        <div class="col-12">
          <h3 class="Judul">{{$data->title}}</h3>
        </div>
        <div class="col-8" style="align-items: center;">
          <div class="img">
            <img src="{{url('file/'.$data->img)}}" style="width: 700px;" alt="">
          </div>
        </div>
        <div class="col-4">
          <div>
            Price : <h5>Rp. {{$data->price}}</h5>
            <p>{{$data->deskripsi}}</p>
          </div>
          @guest
          <a href="{{url('/login')}}">
            <button type="button" class="btn btn-primary ms-auto" style="margin-top: 0px;">
              Book Now
            </button>
          </a>
          @endguest

          @auth
          @if($data_pesan != null)
          @if($data_pesan->img != null)
          <a href="{{url('pesan/'.$data->id)}}">
            <button type="button" class="btn btn-primary ms-auto" style="margin-top: 0px;">
              Book Now
            </button>
          </a>
          @else
          <a href="{{url('pesan-bukti')}}">
            <button type="button" class="btn btn-primary ms-auto" style="margin-top: 0px;">
              Book Now
            </button>
          </a>
          @endif
          @else
          <a href="{{url('pesan/'.$data->id)}}">
            <button type="button" class="btn btn-primary ms-auto" style="margin-top: 0px;">
              Book Now
            </button>
          </a>
          @endif
          @endauth
        </div>
      </div>
    </div>
    <div id="google_translate_element"></div>
  </section>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
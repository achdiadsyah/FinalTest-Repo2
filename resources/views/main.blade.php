<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Final Test - Ryan Achdiadsyah</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 justify-content-center">
        <a class="navbar-brand" href="{{ url('/') }}">CRUD-SAMPLE</a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dosen') }}">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('mahasiswa') }}">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('matkul') }}">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('nilai') }}">Nilai</a>
          </li>
        </ul>
      </nav>
      
      <div class="container pt-2">
        <div class="col-12">
          <h3> @yield('page_title') </h3>
    
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    
    <script src="{{asset('js/myFunction.js')}}"></script>
    
  </body>
</html>
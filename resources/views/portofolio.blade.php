@extends('layouts.app')

@section('title')
<title>WebKaton</title>
@endsection

<!-- Body -->
<body>
  @yield('content')
</body>
  <div class="container d-lg-flex justify-content-between">
    <span class="text-light">CorpKaton  © 2023</span>
  </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
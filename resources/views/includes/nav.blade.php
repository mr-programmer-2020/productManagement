<head>
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/js/bootstrap.min.js')}}">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('products')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('add.prodcut')}}">Add Product</a>
        </li>

      </ul>
     
    </div>
  </div>
</nav>

<div>
  @yield('content')
</div>

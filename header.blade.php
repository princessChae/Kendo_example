
<main>
<h1 class="visually-hidden">Headers examples</h1>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="{{ route('main') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <img src="{{ asset('img/wemeet.png') }}" class="img-circle" width="50px" height="50px">
        <span class="fs-4">We.Meet</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('main') }}" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ route('views.index') }}" class="nav-link">Member Info</a></li>
        <li class="nav-item"><a href="{{ route('views.create') }}" class="nav-link">Add Member</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>

</main>
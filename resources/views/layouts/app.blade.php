<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 fw-bold fst-italic min-vh-100 p-3 bg-coklat" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 "><i class="bi bi-cup-hot-fill me-2 text-dark"></i><span class="fs-4 text-dark">Coffee</span> MZ</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            <button type="button" class="btn btn-outline-dark btn-sm text-light">
            <i class="bi bi-award me-2 text-light"></i>Dashboard</button>
            </a>
        </li>
        <li>
            <a href="/admin" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            <button type="button" class="btn btn-outline-dark btn-sm text-light">
            <i class="bi bi-people-fill me-2 text-light"></i>Admin</button>
            </a>
        </li>
        <li>
            <a href="/orders" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            <button type="button" class="btn btn-outline-dark btn-sm text-light">
            <i class="bi bi-bag-heart-fill me-2 text-light"></i>Orders</button>
            </a>
        </li>
        <li>
            <a href="/product" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            <button type="button" class="btn btn-outline-dark btn-sm text-light">
            <i class="bi bi-journal-text me-2 text-light"></i>Products</button>
            </a>
        </li>
        <li>
            <a href="/customers" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            <button type="button" class="btn btn-outline-dark btn-sm text-light">
            <i class="bi bi-person-walking me-2 text-light"></i>Customers</button>
            </a>
        </li>
        </ul>
        <hr>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
        </div>
    </div>
        <div class="container p-3">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
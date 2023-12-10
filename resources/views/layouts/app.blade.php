<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

  <div id="app">
    <nav class=" navbar-vertical position-fixed navbar-expand bg-body-tertiary navbar-dark float-start" data-bs-theme="dark">
      <!-- navbar vertical content goes here-->
      <div class="menu d-flex flex-column w-100">
        <div class="nav-menu-heading">
          <div class="nav-menu-title">File Manager</div>
        </div>
        <div class="nav-menu">
          <div class="container-fluid">
            <div class="nav-list">
              <a href="" class="nav-link">File Saya</a>
            </div>
            <div class="nav-list">
              <a href="" class="nav-link">File Saya</a>
            </div>
            <div class="nav-list">
              <a href="" class="nav-link">File Saya</a>
            </div>
          </div>

        </div>
      </div>


    </nav>

    <nav class="navbar navbar-expand navbar-dark bg-body-tertiary">
      <div class="container-fluid gap-5">
        <div>
          <img class="img-fluid" src="{{ asset('assets/images/cloud-computing.png') }}" alt="" srcset="">

          <a href="" class="navbar-brand">Cloud Storage</a>
        </div>

        <div class="collapse navbar-collapse">
          <form class="d-flex" role="search">
            <div class="search-container">
              <i class="fa-solid fa-magnifying-glass " style="color: #ffffff;"></i>
              <input class="form1 form-control me-2" type="search" placeholder="Search">

            </div>
          </form>
        </div>

        <div class="collapse navbar-collapse justify-content-end gap-5">
          <i class="fa-regular fa-bell" style="color: #ffffff;"></i>
          <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="logo-image">
              <img src="./assets/images/Pass.jpeg" alt="">
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <div><a class="dropdown-item" href="#!">Settings</a></div>
            <div><a class="dropdown-item" href="#!">Activity Log</a></div>
            <div>
              <hr class="dropdown-divider" />
            </div>
            <div><a class="dropdown-item" href="#!">Logout</a></div>
          </div>
        </div>

      </div>
    </nav>
    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
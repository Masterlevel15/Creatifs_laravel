<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <base href="http://localhost/BES_2_2022_2023/FRAM_POO_SERV/Creatifs_laravel/public/">

    <title>CREA'TIFs - Design capill'Hair</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/app.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          >CREA'TIFs - Design capill'Hair</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Les projets </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Page Heading -->

          <!-- Title -->
          <h1 class="mt-4">Les projets <small>Design capill'Hair</small></h1>
          <div>
            <a href="form.html" class="btn btn-primary">Add a project</a>
          </div>

          <hr />

          <!-- Project One -->
          <div class="row py-4">
            <div class="col-md-4">
              <a href="projet.html">
                <img
                  class="img-fluid rounded mb-3 mb-md-0"
                  src="{{ asset ('assets/images/1.jpg') }}"
                  alt=""
                />
              </a>
            </div>
            <div class="col-md-8">
              <h3>Project One</h3>
              <p class="lead">
                par
                <a href="#">Mister Univ'Hair</a> le 01-01-2017
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Laudantium veniam exercitationem expedita laborum at voluptate.
                Labore, voluptates totam at aut nemo deserunt rem magni pariatur
                quos perspiciatis atque eveniet unde.
              </p>
              <a class="btn btn-primary" href="projet.html">View Details</a>
            </div>
          </div>
          <!-- /.row -->

          <hr />

          <!-- Project Two -->
          <div class="row py-4">
            <div class="col-md-4">
              <a href="projet.html">
                <img
                  class="img-fluid rounded mb-3 mb-md-0"
                  src="{{ asset('assets/images/2.jpg')}}"
                  alt=""
                />
              </a>
            </div>
            <div class="col-md-8">
              <h3>Project Two</h3>
              <p class="lead">
                par
                <a href="#">Leerdam'Hair</a> le 01-01-2017
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut,
                odit velit cumque vero doloremque repellendus distinctio maiores
                rem expedita a nam vitae modi quidem similique ducimus! Velit,
                esse totam tempore.
              </p>
              <a class="btn btn-primary" href="projet.html">View Project</a>
            </div>
          </div>
          <!-- /.row -->

          <hr />

          <nav aria-label="Page navigation example">
            <ul class="pagination" style="justify-content: center">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          <div class="card my-4 d-none">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your search"
                />
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Creatifs Widget -->
          <div class="card my-4">
            <h5 class="card-header">Crea'tifs</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Mister Univ'Hair [4]</a></li>
                    <li><a href="#">Leerdam'Hair [12]</a></li>
                    <li><a href="#">Administra'Tifs [8]</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Tags Widget -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; IEPS 2017 | <a href="login.html">Administration</a>
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>

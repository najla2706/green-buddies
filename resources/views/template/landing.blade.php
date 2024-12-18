<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Artikel - Green Club</title> --}}
    <title>{{ $title ?? 'Green Club' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            /* Gambar tidak terdistorsi */
        }

        .card-body {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" width="120px" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                
                <a class="nav-link"  href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('article') }}">Artikel</a>
                <a class="nav-link" href="{{ route('login') }}">Log In</a>
              {{-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> --}}
              {{-- <form class="d-flex" role="search">
                <a href="{{ route('article.create') }}">
                    <button class="btn btn-outline-success" type="submit">Create New Article</button>
                </a>
              </form> --}}
                {{-- <a href="" class="nav-link" >
                    <button type="button" class="btn btn-success">
                        Create New Article
                    </button>
                </a>   --}}
            </div>
          </div>
        </div>
      </nav>
    @yield('content')

    <footer class="py-3 text-center text-white bg-dark">
        <p>&copy; 2024 Green Club. Semua hak cipta dilindungi.</p>
    </footer>

    <!-- Bootstrap JS & Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>

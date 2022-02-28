<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Recipes - Resep Makanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />


</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <h3>My Recipes</h3>
        </div>

        <ul>
            <li><a href="add">Add Recipes</a></li>
            <li><a href="/">Logout</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox" name="" id="">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- image -->
    <div class="gambar">
        <h1 class="judul" style="margin-bottom:1em;">My Recipes</h1>
        <h3 class="judul">Everything Start from Kitchen</h3>
    </div>

    <!-- Content -->
    <div class="container-fluid resep">
    @foreach($resep as $resep)
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto">
                <div class="container-fluid content">
                    <div class="col-md-8 mx-auto">
                    <!-- <img src="{{url($resep->gambar)}}" alt="" width="200px"> -->
                    <!-- {{ $resep->gambar }} -->
                    </div>
                    <div class="masakan">
                        <h3>{{ $resep->judul }}</h3>
                        <p style="text-align:justify;">
                            {{ $resep->deskripsi }}
                        </p>
                        <p style="text-align:justify;">
                            {{ $resep->alat_bahan }}
                        </p>
                        <p style="text-align:justify;">
                            {{ $resep->langkah }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>    
    <!-- Footer -->
    <div class="footer">
        <p class="copyright">Copyright &copy; 2022 &mdash; My Recipes</p>
    </div>
    <!-- End Footer -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
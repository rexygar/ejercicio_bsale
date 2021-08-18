<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bsale Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 2px gray solid;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="/" class="navbar-brand">Bsale Store</a>
                        </li>
                        <li class="nav-item dropdown">
                            <select name="categoria" id="categoria">
                                <option value="seleccionar">Seleccionar</option>
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="nav-item active">
                            <form class="form-group row">
                                <div class="col-md-8">
                                    <input class="form-control my-2 my-sm-0" style="margin-left: 1rem;" type="search" placeholder="Search">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <i class="fas fa-shopping-cart"></i>
                        <label class="col-form-label text-md-center">asdasdsad</label>
                    </form>
                </div>
            </nav>
    </header>
    <div class="container">
        <div class="container-flex content">
            <div class="row justify-content-center">
                @foreach ($product as $p)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $p->url_image }}" class="img-fluid" alt="">
                            <div class="form-group row">
                                <label class="col-md-12 col-form-label text-md-center">{{ $p->name }}</label>
                                <br>
                                <label class="col-md-12 col-form-label text-md-center">${{ number_format($p->price,0,'','.') }}</label>
                                <button class="btn" type="button"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>

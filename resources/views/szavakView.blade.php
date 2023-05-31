<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <script src="szavakAjax.js"></script>
    <script src="szavakActions.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="stilus.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szótár</title>
</head>
<body>
    <main>
        <div class="container">
                   
            <header>
                <h5>Szótár</h5>
                <h4>Szavak</h4>
            </header>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Válassz témát</a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Melléknevek</a></li>

        </ul>
        </div> @csrf
        <form action="{{ route('szavak.create') }}" method="POST" id="form-group">
                    
                      
                <label>
                <span>ANGOL</span>
                <input type="text" name="angol" id="angol" required>
                </label>
                        
                <label>
                <span>MAGYAR</span>
                <input type="text" name="magyar" id="magyar" required>
                </label>
                       
                        
                <label>
                <span></span>
                <button type="submit" class="hozzaadasButton btn btn-warning">Hozzáadás</button>
                </label>
                       
</form>
<section>
    <table class="table">
        <thead>
                <tr>
                    <th scope="col">ANGOL</th>
                    <th scope="col">MAGYAR</th>
                    <th scope="col">Visszajelzés</th>
                </tr>
        </thead>
        <tbody>
        @foreach($szavaks as $szavak)
                <tr>
                <th scope="row">{{ $szavak->angol }}</th>
                <td><input type="text"></td>
                <td></td>
                <td><button class="delete-button btn btn-danger" data-id="{{ $szavak->id }}">Törlés</button></td>
                </tr>
  
         @endforeach
        </tbody>
        </table>
        </section>

    </div>
    <footer>Szótár 2023</footer>
    </main>
</body>
</html>
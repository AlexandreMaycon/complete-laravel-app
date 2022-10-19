<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>Prova prática</title>
    <style>
        .fa-trash{
            color:red;
        }
        .fa-pen-to-square{
            color:black
        }
        .fa-trash, .fa-pen-to-square, .fa-file{
            margin-left: 5px;
            font-size: 17px;
        }
</style>
</head>

<body>
    <!-- Atalho com a estrutura HTML pronto -->
    @yield('content')
</body>
<script src="https://kit.fontawesome.com/293e2d2061.js" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html>

<head>
    <title>Erro no Pagamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h2>Erro ao Processar o Pagamento</h2>
        <p>{{ $errorMessage }}</p>
    </div>
</body>

</html>

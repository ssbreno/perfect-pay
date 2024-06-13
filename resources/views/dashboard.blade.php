<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#customers" data-toggle="tab">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#payments" data-toggle="tab">Pagamentos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="customers">
                @include('customers.create')
            </div>
            <div class="tab-pane fade" id="payments">
                @include('payments.create')
            </div>
        </div>
    </div>
</body>

</html>

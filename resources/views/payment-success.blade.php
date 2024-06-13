<!DOCTYPE html>
<html>

<head>
    <title>Pagamento Sucesso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h2>Pagamento Realizado com Sucesso</h2>
        @if($billingType == 'BOLETO')
        <p>Seu boleto: <a href="{{ $boletoUrl }}" target="_blank">Clique aqui</a></p>
        @elseif($billingType == 'PIX')
        <p>QRCode Pix: <img src="{{ $qrcodeUrl }}" alt="QR Code"></p>
        <p>Copia e Cola: {{ $copiaCola }}</p>
        @endif
    </div>
</body>

</html>

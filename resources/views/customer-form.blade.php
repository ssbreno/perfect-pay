<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Formulário de Cadastro de Cliente</h2>
        <form id="customer-form">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="cpfCnpj">CPF/CNPJ:</label>
                <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="mobilePhone">Celular:</label>
                <input type="text" class="form-control" id="mobilePhone" name="mobilePhone">
            </div>
            <div class="form-group">
                <label for="address">Endereço:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="addressNumber">Número:</label>
                <input type="text" class="form-control" id="addressNumber" name="addressNumber">
            </div>
            <div class="form-group">
                <label for="complement">Complemento:</label>
                <input type="text" class="form-control" id="complement" name="complement">
            </div>
            <div class="form-group">
                <label for="province">Bairro:</label>
                <input type="text" class="form-control" id="province" name="province">
            </div>
            <div class="form-group">
                <label for="postalCode">CEP:</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode">
            </div>
            <div class="form-group">
                <label for="externalReference">Referência Externa:</label>
                <input type="text" class="form-control" id="externalReference" name="externalReference">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
        </form>
        <div id="response"></div>
    </div>

    <script>
        document.getElementById('customer-form').addEventListener('submit', function(e) {
            e.preventDefault();

            var form = e.target;
            var data = new FormData(form);

            fetch('/api/customers', {
                    method: 'POST',
                    body: JSON.stringify({
                        name: data.get('name'),
                        cpfCnpj: data.get('cpfCnpj'),
                        email: data.get('email'),
                        phone: data.get('phone'),
                        mobilePhone: data.get('mobilePhone'),
                        address: data.get('address'),
                        addressNumber: data.get('addressNumber'),
                        complement: data.get('complement'),
                        province: data.get('province'),
                        postalCode: data.get('postalCode'),
                        externalReference: data.get('externalReference')
                    }),
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                }).then(response => response.json())
                .then(data => {
                    if (data.errors) {
                        document.getElementById('response').innerHTML = '<p>Erro: ' + data.errors[0].description + '</p>';
                    } else {
                        document.getElementById('response').innerHTML = '<p>Cliente cadastrado com sucesso!</p>';
                    }
                }).catch(error => {
                    document.getElementById('response').innerHTML = '<p>Erro ao cadastrar cliente.</p>';
                });
        });
    </script>
</body>

</html>

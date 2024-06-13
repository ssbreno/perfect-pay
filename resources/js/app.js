require('./bootstrap');

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('customer-form').addEventListener('submit', function (e) {
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
                    toastr.error('Erro: ' + data.errors[0].description);
                } else {
                    toastr.success('Cliente cadastrado com sucesso!');
                    form.reset();
                }
            }).catch(error => {
                toastr.error('Erro ao cadastrar cliente.');
            });
    });

    document.getElementById('payment-form').addEventListener('submit', function (e) {
        e.preventDefault();

        var form = e.target;
        var data = new FormData(form);

        fetch('/api/payments', {
            method: 'POST',
            body: JSON.stringify({
                customer: data.get('customer'),
                billingType: data.get('billingType'),
                value: data.get('value'),
                dueDate: data.get('dueDate'),
                description: data.get('description')
            }),
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        }).then(response => response.json())
            .then(data => {
                if (data.errors) {
                    toastr.error('Erro: ' + data.errors[0].description);
                } else {
                    window.location.href = '/payment-success';
                }
            }).catch(error => {
                toastr.error('Erro ao processar pagamento.');
            });
    });
});

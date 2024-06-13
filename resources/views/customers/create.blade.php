<div class="form-container">
    <h3>Cadastro de Cliente</h3>
    <form id="customer-form">
        <div class="form-row">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="cpfCnpj">CPF/CNPJ:</label>
                <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="mobilePhone">Celular:</label>
                <input type="text" class="form-control" id="mobilePhone" name="mobilePhone">
            </div>
            <div class="form-group">
                <label for="address">Endereço:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="addressNumber">Número:</label>
                <input type="text" class="form-control" id="addressNumber" name="addressNumber">
            </div>
            <div class="form-group">
                <label for="complement">Complemento:</label>
                <input type="text" class="form-control" id="complement" name="complement">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="province">Bairro:</label>
                <input type="text" class="form-control" id="province" name="province">
            </div>
            <div class="form-group">
                <label for="postalCode">CEP:</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="externalReference">Referência Externa:</label>
                <input type="text" class="form-control" id="externalReference" name="externalReference">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
            </div>
        </div>
    </form>
    <div id="customer-response"></div>
</div>

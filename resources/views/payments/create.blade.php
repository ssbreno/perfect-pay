<div class="form-container">
    <h3>Pagamentos</h3>
    <form id="payment-form">
        <div class="form-row">
            <div class="form-group">
                <label for="customer">Cliente:</label>
                <input type="text" class="form-control" id="customer" name="customer">
            </div>
            <div class="form-group">
                <label for="billingType">Forma de Pagamento:</label>
                <select class="form-control" id="billingType" name="billingType">
                    <option value="BOLETO">Boleto</option>
                    <option value="CREDIT_CARD">Cartão de Crédito</option>
                    <option value="PIX">Pix</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="value">Valor:</label>
                <input type="number" class="form-control" id="value" name="value">
            </div>
            <div class="form-group">
                <label for="dueDate">Data de Vencimento:</label>
                <input type="date" class="form-control" id="dueDate" name="dueDate">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
            </div>
        </div>
    </form>
    <div id="payment-response"></div>
</div>

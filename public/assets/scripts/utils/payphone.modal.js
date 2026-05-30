document.getElementById('btn-cerrar').style.display = 'none';
function mostrarPopup() {
    // Mostrar el popup y overlay
    document.getElementById('popup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('btn-cerrar').style.display = 'block';

    ejecutarCajitaPagos();
}

function cerrarPopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function ejecutarCajitaPagos() {
    const clientTransactionID = "ID-UNICO-X-TRANSACCION";
    const ppb = new PPaymentButtonBox({
        //token obtenido desde la consola de developer
        token: 'YOUR_TOKEN',
        amount: 315,
        amountWithoutTax: 200,
        amountWithTax: 100,
        tax: 15,
        service: 0,
        tip: 0,
        storeId: "YOUR_STOREID",
        reference: "Motivo de Pago",
        currency: 'USD',
        clientTransactionId: clientTransactionID,
        backgroundColor: "#6610f2"
    }).render('pp-button');
}
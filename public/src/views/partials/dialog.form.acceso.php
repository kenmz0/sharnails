<?php
/**
 * @var string $title_page Nombre de la pagina que aparece tambien en el header
 */
?>

<dialog class="form-acceso" id="form_acceso">
    <div class="dialog-header">
        <h2 class="title">Obtener acceso a <?php echo $title_page ?></h2>
        <button class="close_dialog" id="from_acceso_close">✖</button>
    </div>
    <section class="form-container">
        <form action="">
            <div class="info-group usuario">
                <div class="form-group">
                    <label for="nombre">Nombre y Apellidos: </label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="telefono"><small>(Opcional)</small> Whatsapp: </label>
                    <input type="tel" name="telefono" id="telefono" required pattern="[0-9]{10}">
                </div>
                <div class="form-group checkbox-whatsapp">
                    <label for="telefono_check">Quiero recibir mi código de acceso por Whatsapp</label>
                    <input type="checkbox" name="telefono_check" id="telefono_check">
                </div>
            </div>
            <div class="info-group metodo">
                <select id="metodo_pago">
                    <option value="">Metodo de Pago</option>
                    <option value="banco_pinchicha">Banco Pichincha</option>
                    <option value="banco_ecuador">BanEcuador</option>
                    <option value="banco_paypal">PayPal</option>
                </select>
                <div class="text-info">
                    <h3>Banco</h3>
                </textarea>
            </div>
            <div>
                <div class="info-group validacion">
                    <div class="form-group">
                        <label for="recibo_img">Adjunta tu comprobante de pago (Captura o Foto)</label>
                        <input type="file" name="recibo_img" id="recibo_img">
                    </div>
                </div>

                <div class="info-group validacion">
                    <div class="form-group">
                        <input type="submit" value="Enviar">
                    </div>
                </div>


        </form>
    </section>
</dialog>
<style>
    .form-acceso {
        border: none;
        border-radius: 2px;
        padding: 20px;
        padding-top: 10px;
        background-color: var(--accent-color);
    }

    .dialog-header {
        height: 50px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: start;
    }

    .dialog-header .title {
        margin: 0;
        line-height: 50px;
    }

    .form-container {
        margin: auto;
        width: 100%;
        height: 100%;
    }

    .form-container form {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 7px;
    }

    .form-container label {
        display: block;
        color: white;
    }

    .form-container input {
        width: 100%;
        border: 1px solid #ccc;
        height: 30px;
        padding-left: 10px;
        border-radius: 2px;
    }

    .form-container .usuario {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .form-container .form-group:not(.checkbox-whatsapp) {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-container .checkbox-whatsapp {
        display: flex;
        justify-content: start;
        gap: 5px;
        align-items: center;
    }

    .form-container .checkbox-whatsapp label {
        display: inline;
        font-size: 0.9em;
        color: #ccc;
        font-style: italic;
    }

    .form-container .checkbox-whatsapp input {
        width: auto;
        margin: 0;
    }

    .info-group.metodo {
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-template-rows: 50px 1fr;
    }

    .info-group.metodo select{
        height: 30px;
        grid-column: 1;
        grid-row: 1;
        border-radius: 2px;
        border: 1px solid #ccc;
    }

    .info-group.metodo .text-info{
        grid-column: 1 / 3;
        grid-row: 2;
    }
</style>
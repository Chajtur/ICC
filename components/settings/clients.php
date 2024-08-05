<!-- Purpose: View for clients -->
<div class="w-full h-full flex flex-col">
    <div class="text-2xl text-center">
        Administrador de Clientes
    </div>
    <div class="flex justify-center w-full">
        <div class="flex-col justify-between w-5/6 md:w-1/2">
            <div class="flex flex-row">
                <input type="text" class="border-2 border-main-dark p-1" placeholder="Buscar cliente">
                <!-- <button class="bg-main-dark text-white p-1">Buscar</button> -->
            </div>
            <button class="bg-main-dark text-white mt-2 btn-success" id="btnAgregarCliente">Agregar Cliente</button>
            <div id="clientContent"><?php include $_SERVER['DOCUMENT_ROOT'] . "/components/clients/clientList.php" ?></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#btnAgregarCliente").click(function() {
            $("#clientContent").load("/components/clients/addClient.php");
        });
    });
</script>
<div class="border-2 border-slate-500 mt-3 rounded p-2">
    <div class="text-2xl text-center">
        Agregar Cliente
    </div>
    <div class="flex justify-center w-full mt-2">
        <div class="flex-col justify-between w-5/6 md:w-1/2">
            <div class="flex flex-col gap-2 items-start">
                <label for="clientName">Nombre del cliente</label>
                <input type="text" placeholder="Nombre del cliente" id="clientName">
                <label for="clientDescription">Número de agentes</label>
                <textarea type="text" placeholder="Descripción" id="clientDescription"></textarea>
                <label for="startDate">Fecha de Inicio</label>
                <input type="date" id="startDate">
            </div>
            <div class="flex justify-end">
                <button id="saveClient" class="bg-main-dark text-white mt-2 btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#saveClient').click(function() {
        let clientName = $('#clientName').val();
        let clientDescription = $('#clientDescription').val();
        let startDate = $('#startDate').val();
        /*$.ajax({
            url: '/api/clients/addClient.php',
            method: 'POST',
            data: {
                clientName: clientName,
                clientDescription: clientDescription,
                startDate: startDate
            },
            success: function(data) {
                if (data == 'success') {
                    alert('Cliente agregado exitosamente');
                    $('#clientName').val('');
                    $('#clientDescription').val('');
                    $('#startDate').val('');
                } else {
                    alert('Error al agregar el cliente');
                }
            },
            error: function() {
                alert('Error al agregar el cliente');
            }
        });*/
        $('#settingsContent').load(`/components/settings/clients.php`);
    });
</script>
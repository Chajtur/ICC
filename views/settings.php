<div class="h-full w-full flex flex-col">
    <div id="settingsContent"></div>
    <div class="flex flex-row h-12 w-full mt-auto justify-evenly">
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="clients">
            <i class="fa-solid fa-user-tie"></i>
            <p class="text-xs">Clientes</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="roles">
            <i class="fa-solid fa-users-gear"></i>
            <p class="text-xs">Roles</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="permissions">
            <i class="fa-solid fa-user-check"></i>
            <p class="text-xs">Permisos</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="files">
            <i class="fa-solid fa-folder-open"></i>
            <p class="text-xs">Archivos</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="profile">
            <i class="fa-solid fa-circle-user"></i>
            <p class="text-xs">Perfil</p>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#settingsContent').load(`/components/settings/clients.php`);
        $('div[data-group="clients"]').addClass('bg-white text-main-dark');
        $('div[data-group="clients"]').removeClass('bg-main-dark text-white');
        $('.hrIcon').click(function() {
            $(this).siblings().removeClass('bg-white text-main-dark');
            $(this).siblings().addClass('bg-main-dark text-white');
            $(this).addClass('bg-white text-main-dark');
            $(this).removeClass('bg-main-dark text-white');
            let group = $(this).data('group');
            $.ajax({
                url: `/components/settings/${group}.php`,
                success: function(data) {
                    $('#settingsContent').html(data);
                },
                error: function() {
                    $('#settingsContent').load(`/oops.php`);
                }
            });
        });
    });
</script>
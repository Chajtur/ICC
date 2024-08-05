<div class="h-full w-full flex flex-col">
    <div id="hrContent"></div>
    <div class="flex flex-row h-12 w-full mt-auto justify-evenly">
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="home">
            <i class="fa-solid fa-house-chimney"></i>
            <p class="text-xs">Inicio</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="inbox">
            <i class="fa-solid fa-inbox"></i>
            <p class="text-xs">Buzón</p>
        </div>
        <div class="hrIcon bg-main-dark flex flex-col w-full items-center text-white p-2 hover:bg-white hover:text-main-dark cursor-pointer justify-center" data-group="people">
            <i class="fa-solid fa-user-group"></i>
            <p class="text-xs">Personal</p>
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
        $('#hrContent').load(`/components/hr/home.php`);
        $('div[data-group="home"]').addClass('bg-white text-main-dark');
        $('div[data-group="home"]').removeClass('bg-main-dark text-white');
        $('.hrIcon').click(function() {
            $(this).siblings().removeClass('bg-white text-main-dark');
            $(this).siblings().addClass('bg-main-dark text-white');
            $(this).addClass('bg-white text-main-dark');
            $(this).removeClass('bg-main-dark text-white');
            let group = $(this).data('group');
            $.ajax({
                url: `/components/hr/${group}.php`,
                success: function(data) {
                    $('#hrContent').html(data);
                },
                error: function() {
                    $('#hrContent').load(`/oops.php`);
                }
            });
        });
    });
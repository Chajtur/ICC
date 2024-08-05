<div class="h-full w-full flex items-start justify-center bg-main-dark py-8 lg:items-center md:py-24">
    <div class="flex flex-col items-center rounded-xl bg-white w-5/6 p-4 text-main-dark font-bold md:w-1/2 lg:w-1/4">
        <img src="/assets/ICC.webp" alt="Logo" class="w-3/4 md:w-1/2">
        <div class="flex flex-col w-5/6 md:w-2/3">
            <label for="user">Usuario</label>
            <input type="text" id="user" class="p-2 border-2 rounded">
            <label class="mt-2" for="password">Contraseña</label>
            <div class="relative">
                <input type="password" id="password" class="p-2 border-2 border-sky-950 rounded w-full">
                <div id="togglePassword" class="absolute inset-y-0 right-0 p-2 cursor-pointer">
                    <i class="fa-regular fa-eye text-main-dark"></i>
                </div>
            </div>
            <div id="forgotPassword" class="text-main-dark text-xs mt-2 cursor-pointer">¿Olvidaste tu contraseña?</div>
            <div class="flex justify-end mt-2">
                <button id="logIn" class="bg-main-dark text-white">Iniciar Sesión</button>
            </div>
        </div>
    </div>
</div>

<style>
    .no-hover:hover {
        background-color: inherit;
        color: inherit;
        border-color: inherit;
    }
</style>

<script>
    $('#togglePassword').on('click', function() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });

    
</script>
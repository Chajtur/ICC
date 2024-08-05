<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/55b2ee1815.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/tailwind.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<html lang="en" class="h-full">

<body class="h-screen w-screen">

    <?php

    include 'config.php';

    if (isloggedIn()) {
        /*$user = getUser();
    $name = $user['name'];
    $role = $user['role'];
    $image = $user['image'];*/
        include 'views/index.php';
    } else {
        include 'views/logIn.php';
    } ?>


    <!-- Modal for general information -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden modal bg-gray-300 bg-opacity-60" tabindex="-1" id="infoModal">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
                <div class="modalTitle">
                    <h3 class="text-lg leading-6 font-medium" id="infoModalTitle"></h3>
                    <button id="modalClose" type="button" class="absolute right-0 top-0 m-3 border-2 modalClose"><i class="fa fa-solid fa-close"></i></button>
                </div>
                <div class="px-4 py-5 sm:p-6" id="infoModalText">
                    <p>Info goes here</p>
                </div>
                <div class="bg-white border-t px-4 py-3 sm:px-6 sm:flex justify-end" id="infoModalButtons">
                    <button type="button" class="w-full btn-info sm:ml-3 sm:w-auto sm:text-sm modalClose">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para avisar cierre de sesión -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden modal bg-gray-300" tabindex="-1" id="sesionExpirada">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
                <div class="modalTitle bg-red-800">
                    <h3 class="text-lg leading-6 font-medium" id="infoModalTitle">Session has expired</h3>
                    <button type="button" class="absolute right-0 top-0 m-3 border-2 modalClose" aria-label="Close"><i class="fa fa-solid fa-close"></i></button>
                </div>
                <div class="px-4 py-5 sm:p-6" id="infoModalText">
                    <p>Your session has expired due to inactivity, you will need to log in again to continue.</p>
                </div>
                <div class="bg-white border-t px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse" id="infoModalButtons">
                    <button type="button" class="w-full btn-info sm:ml-3 sm:w-auto sm:text-sm modalClose">Ok</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    let touchstartX = 0
    let touchendX = 0

    function checkDirection() {
        let distance = Math.abs(touchendX - touchstartX); // Calculate the absolute swipe distance
        if (distance > 50) { // Check if the swipe was greater than 50 pixels
            if (touchendX < touchstartX) { // Detecting a swipe left
                if ($(window).width() <= 768) {
                    $('sidebar').animate({
                        width: 'hide' // Hiding the sidebar
                    }, 500);
                }
            } else if (touchendX > touchstartX) { // Detecting a swipe right
                $('sidebar').animate({
                    width: 'show' // Showing the sidebar
                }, 500);
            }
        }
    }

    document.addEventListener('touchstart', e => {
        touchstartX = e.changedTouches[0].screenX
    })

    document.addEventListener('touchend', e => {
        touchendX = e.changedTouches[0].screenX
        checkDirection()
    });

    function toggleMenu() {
        let menu = $('sidebar');
        if (menu.is(':visible')) {
            menu.animate({
                width: 'hide'
            }, 500);
        } else {
            menu.animate({
                width: 'show'
            }, 500);
        }
    }

    $('.userImage').on('click', function() {
        if ($(window).width() <= 768) {
            toggleMenu();
        }
    });

    $(document).click(function(event) {
        if ($(window).width() <= 768) {
            if (!$(event.target).closest('.userImage').length) {
                if ($('sidebar').is(':visible')) {
                    $('sidebar').animate({
                        width: 'hide'
                    }, 500);
                }
            }
        }
    });
</script>